<?php

namespace App\Http\Controllers\Api;

use App\Enums\CoursesTagsEnum;
use App\Http\Requests\UploadFileRequest;
use App\Repositories\LessonFileRepository;
use App\Utils\Chain;
use Aws\AwsClientInterface;
use Aws\S3\S3Client;
use Aws\Sdk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class CloudController extends ApiController
{
    /**
     * @var AwsClientInterface|S3Client
     */
    private $s3;

    private LessonFileRepository $lessonFileRepository;

    /**
     * @param Sdk $sdk
     * @param LessonFileRepository $lessonFileRepository
     */
    public function __construct(Sdk $sdk, LessonFileRepository $lessonFileRepository)
    {
        $this->s3 = $sdk->createClient('s3', [
            'endpoint'  => env('AWS_API_ENDPOINT'),
            'use_path_style_endpoint' => true,
        ]);
        $this->lessonFileRepository = $lessonFileRepository;
    }

    /**
     * Upload a file to the cloud server
     *
     * @param UploadFileRequest $request
     * @return \App\Http\Responses\JsonResponse
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function uploadLessonFile(UploadFileRequest $request)
    {
        $content = $request->post('content');
        $fileName = $request->post('file_name');
        $course = $request->post('course_tag');
        $lessonId = $request->post('lesson_tag');
        $accountId = Auth::id();

        $fileNameWithExt = sprintf('%s.%s', $fileName, CoursesTagsEnum::getCourseTypeExtension($course));

        $fileCloudInfo = [
            'Bucket' => env('AWS_SCRIPTS_BUCKET'),
            'Key' => sprintf(
                '%s/%s/%s/%s',
                $accountId,
                $course,
                $lessonId,
                $fileNameWithExt
            ),
            'Body'      => $content,
            'ACL'       => 'public-read',
            'ContentType' => 'text/plain'
        ];

        $fileDbInfo = [
            'account_id' => $accountId,
            'lesson_id' => $lessonId,
            'file_name' => $fileNameWithExt
        ];

        Chain::start()
            ->invoke([$this->s3, 'putObject'], [$fileCloudInfo])
            ->invoke([$this->lessonFileRepository, 'createOrUpdate'], [$fileDbInfo])
            ->invoke(function ($accountId, $course, $lessonId) {
                $this->deleteCachedFiles($accountId, $course, $lessonId);
            }, [$accountId, $course, $lessonId]);

        $this->setResponseData([
            'message' => 'file_saved_successfully',
            'show_toast' => true
        ]);

        return $this->response();
    }

    /**
     * Get list of lesson files for a specific user
     *
     * @param $prefix
     * @param $courseTag
     * @param $lessonTag
     * @param Request $request
     * @return \App\Http\Responses\JsonResponse
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function listLessonFiles($prefix, $courseTag, $lessonTag, Request $request)
    {
        $data = $this->getFromCache($prefix, $courseTag, $lessonTag);

        if (empty($data)) {
            $key = sprintf('%s/%s/%s', $prefix, $courseTag, $lessonTag);

            $objects = $this->s3->listObjects([
                    'Bucket' => env('AWS_SCRIPTS_BUCKET'),
                    'Key' => $key,
                    'Prefix' => sprintf('%s/%s/%s', $prefix, $courseTag, $lessonTag)
                ])->get('Contents') ?? [];

            $files = [];

            $expiryTime = Carbon::now()->addMinutes(env('AWS_DOWNLOAD_EXPIRE'));
            $expiryTimestamp = $expiryTime->getTimestamp();

            foreach ($objects as $object) {
                $fileName = explode(DIRECTORY_SEPARATOR, $object['Key']);
                $downloadCommand = $this->s3->getCommand('GetObject', [
                    'Bucket' => env('AWS_SCRIPTS_BUCKET'),
                    'Key' => sprintf('%s/%s/%s/%s', $prefix, $courseTag, $lessonTag, end($fileName))
                ]);
                $downloadLink = (string) $this->s3
                    ->createPresignedRequest(
                        $downloadCommand,
                        sprintf('+%u minutes', $expiryTime->diffInMinutes()))
                    ->getUri();

                $files[] = [
                    'file_name' => end($fileName),
                    'file_size' => round($object['Size'] / 1024, 2) . ' KB',
                    'download_link' => $downloadLink,
                    'last_modified' => $object['LastModified']->getTimestamp(),
                ];
            }

            $data = [
                'files_list' => $files,
                'files_count' => count($files),
                'links_expire_in' => $expiryTimestamp
            ];

            $this->cacheFiles($prefix, $courseTag, $lessonTag, $data, $expiryTime->diffInSeconds());
        }

        $data['files_list'] = array_map(function ($file) { // Readable last modified in time ago
            $file['last_modified'] = Carbon::parse($file['last_modified'])->diffForHumans();
            return $file;
        }, $data['files_list']);

        $readableExpiryTime = ($expiryTime ?? Carbon::createFromTimestamp($data['links_expire_in']))
            ->longRelativeToNowDiffForHumans();

        $this->setResponseData(array_merge($data, [
            'links_expire_in' => $readableExpiryTime
        ]));

        return $this->response();
    }

    /**
     * Get a lesson file
     *
     * @param $prefix
     * @param $courseTag
     * @param $lessonTag
     * @param $fileName
     * @param Request $request
     * @return \App\Http\Responses\JsonResponse
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function getLessonFile($prefix, $courseTag, $lessonTag, $fileName, Request $request)
    {
        $file = $this->s3->getObject([
            'Bucket' => env('AWS_SCRIPTS_BUCKET'),
            'Key' => sprintf('%s/%s/%s/%s', $prefix, $courseTag, $lessonTag, $fileName)
        ]);

        $this->setResponseData([
            'file_content' => (string) $file['Body']
        ]);

        return $this->response();
    }

    /**
     * Delete a lesson file
     *
     * @param $courseTag
     * @param $lessonTag
     * @param $fileName
     * @param Request $request
     * @return \App\Http\Responses\JsonResponse
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function deleteLessonFile($courseTag, $lessonTag, $fileName, Request $request)
    {
        $fileInfo = [
            'Bucket' => env('AWS_SCRIPTS_BUCKET'),
            'Key' => sprintf('%s/%s/%s/%s', Auth::id(), $courseTag, $lessonTag, $fileName)
        ];

        Chain::start()
            ->invoke([$this->s3, 'deleteObject'], [$fileInfo])
            ->invoke([$this->lessonFileRepository, 'deleteWhere'], [[
                'account_id' => Auth::id(),
                'lesson_id' => $lessonTag,
                'file_name' => $fileName
            ]]);

        $this->setResponseData([
            'status' => 'success',
            'message' => 'file_deleted_successfully',
            'show_toast' => true
        ]);

        $this->deleteCachedFiles(Auth::id(), $courseTag, $lessonTag);

        return $this->response();
    }

    /**
     * Get lesson files from cache
     *
     * @param $accountId
     * @param $course
     * @param $lessonId
     * @return array
     */
    private function getFromCache($accountId, $course, $lessonId)
    {
        try {
            return Redis::get(md5(sprintf('%s.%s.%s', $accountId, $course, $lessonId)));
        } catch (\RedisException $exception) {
            // do nothing
        }

        return [];
    }

    /**
     * Set lesson files in cache
     *
     * @param $accountId
     * @param $course
     * @param $lessonId
     * @param $files
     * @param $ttl
     * @return void
     */
    private function cacheFiles($accountId, $course, $lessonId, $files, $ttl)
    {
        try {
            Redis::set(md5(sprintf('%s.%s.%s', $accountId, $course, $lessonId)), $files, 'EX', $ttl);
        } catch (\RedisException $exception) {
            // do nothing
        }
    }

    /**
     * Delete cached files
     *
     * @param $accountId
     * @param $course
     * @param $lessonId
     * @return void
     */
    private function deleteCachedFiles($accountId, $course, $lessonId)
    {
        try {
            Redis::del(md5(sprintf('%s.%s.%s', $accountId, $course, $lessonId)));
        } catch (\RedisException $exception) {
            // do nothing
        }
    }
}