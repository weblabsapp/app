<?php

namespace App\Http\Controllers\Api;


use App\Http\Requests\EmailSubscriptionRequest;
use App\Http\Requests\EmailUnsubscribeRequest;
use App\Repositories\EmailSubscriptionRepository;

class EmailSubscriptionController extends ApiController
{
    /**
     * @var EmailSubscriptionRepository
     */
    private $repository;

    /**
     * @param EmailSubscriptionRepository $repository
     */
    public function __construct(EmailSubscriptionRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Subscribe to mail list
     *
     * @param EmailSubscriptionRequest $request
     * @return \App\Http\Responses\JsonResponse
     */
    public function subscribe(EmailSubscriptionRequest $request)
    {
        $this->repository->findOrCreate(array_merge(
            $request->json()->all(),
            ['notify' => true]
        ));

        $this->setResponseData([
            'status' => 'success',
            'message' => 'subscribe_success',
            'show_toast' => true
        ]);

        return $this->response();
    }

    /**
     * Unsubscribe from mail list
     *
     * @param EmailUnsubscribeRequest $request
     * @return \App\Http\Responses\JsonResponse
     * @throws \App\Exceptions\AbstractException
     */
    public function unsubscribe(EmailUnsubscribeRequest $request)
    {
        $this->repository->disableNotification($request->json('email'));

        $this->setResponseData([
            'status' => 'success',
            'message' => 'unsubscribe_success',
            'show_toast' => true
        ]);

        return $this->response();
    }
}
