<?php

namespace App\Repositories;


use App\Exceptions\DuplicateEntityException;
use App\Exceptions\NotFoundException;
use App\Exceptions\ValidationException;
use App\Models\EmailSubscription;
use Czim\Repository\BaseRepository;
use Illuminate\Database\Eloquent\Collection;

class EmailSubscriptionRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return EmailSubscription::class;
    }

    /**
     * @param array $data
     * @return bool|\Illuminate\Database\Eloquent\Model|null
     */
    public function findOrCreate(array $data)
    {
        if (!isset($data['email'])) {
            ValidationException::throw('please provide a valid email address');
        }

        /** @var EmailSubscription $subscription */
        $subscription = parent::findBy('email', $data['email']);

        if (!empty($subscription)) {
            if ($subscription->notify) {
                DuplicateEntityException::throw('email already subscribed', [
                    'unsubscribe_token' => $subscription->generateToken(),
                    'unsubscribe_link_title' => __('unsubscribe text'),
                    'unsubscribe_link' => route('api.unsubscribe')
                ]);
            }
            return $subscription->update(['notify' => 1]);
        }

        return parent::create($data);
    }

    /**
     * @param string $email
     * @return void
     * @throws \App\Exceptions\AbstractException
     */
    public function disableNotification(string $email)
    {
        $subscriptions = parent::findWhere(['email' => $email, 'notify' => 1]);

        if ($subscriptions->isEmpty()) {
            NotFoundException::throw('you are not subscribed');
        }

        $subscriptions->first()->update(['notify' => 0]);
    }
}
