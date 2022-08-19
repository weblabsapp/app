<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redis;
use Webmozart\Assert\Assert;
use Webmozart\Assert\InvalidArgumentException;

class TranslationsController extends ApiController
{
    /**
     * Get translation for locale
     *
     * @param $locale
     * @param Request $request
     * @return \App\Http\Responses\JsonResponse
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function get($locale, Request $request)
    {
        $hash = hash_file(
            'md5', base_path('resources/lang/') . sprintf('%s.json', $locale)
        );
        $this->assertHash($hash, $request->get('hash', ''));

        $translation = trans()->get('*', [], $locale);
        $translationKeys = array_keys($translation);

        foreach ($translationKeys as &$key) {
            $key = str_replace(' ', '_', $key);
        }

        $translation = array_combine($translationKeys, array_values($translation));
        Redis::set('translation:hash', $hash);

        $this->setResponseData([
            'translations' => $translation,
            'hash' => $hash,
            'locale' => $locale
        ]);

        return $this->response();
    }

    /**
     * @param $oldHash
     * @param $newHash
     * @return Response|void
     */
    private function assertHash($oldHash, $newHash)
    {
        try {
            Assert::notEq($newHash, $oldHash);
        } catch (\RedisException $exception) {
            // do nothing
        } catch (InvalidArgumentException $exception) {
            abort(new Response([]));
        }
    }
}
