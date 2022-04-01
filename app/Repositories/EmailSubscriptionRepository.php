<?php

namespace App\Repositories;


use App\Models\EmailSubscription;
use Czim\Repository\BaseRepository;

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
}
