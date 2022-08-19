<?php

namespace App\Repositories;

use App\Models\Topic;
use Czim\Repository\BaseRepository;

class TopicRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return Topic::class;
    }
}
