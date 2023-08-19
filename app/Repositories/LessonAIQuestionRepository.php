<?php

namespace App\Repositories;

use App\Exceptions\AbstractException;
use App\Exceptions\NotFoundException;
use App\Models\LessonAiQuestion;
use Czim\Repository\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class LessonAIQuestionRepository extends BaseRepository
{
    public function model()
    {
        return LessonAiQuestion::class;
    }

    /**
     * @param $id
     * @param $columns
     * @param $attribute
     * @return LessonAiQuestion
     * @throws AbstractException
     */
    public function find($id, $columns = ['*'], $attribute = null)
    {
        /** @var LessonAiQuestion $question */
        $question = parent::find($id, $columns, $attribute);

        if (!$question) {
            NotFoundException::throw('lesson ai question not found');
        }

        return $question;
    }
}