<?php

namespace App\Repositories;

use App\Models\Lesson;
use App\Models\Topic;
use Czim\Repository\BaseRepository;
use Illuminate\Database\Eloquent\Builder;

class LessonRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return Lesson::class;
    }

    /**
     * Get lesson with progress info
     *
     * @param string $lessonTag
     * @param $accountId
     * @return \App\Models\Lesson|\Illuminate\Database\Eloquent\Model|null
     */
    public function getLessonInfo(string $lessonTag, $accountId = null)
    {
        $query = $this->query()
            ->where('tag', $lessonTag);

        if ($accountId) {
            $query->with([
                'progress' => function ($query) use ($accountId) {
                    return $query->where('account_id', $accountId);
                }
            ]);
            $query->with('topic');
        }

        return $query->first();
    }

    /**
     * Get previous and next lessons
     *
     * @param Lesson $currentLesson
     * @return array
     */
    public function getNextAndPreviousLessons(Lesson $currentLesson)
    {
        $lessons = $this->query()
            ->where('course_id', $currentLesson->course_id)
            ->where('lesson_order', '<', $currentLesson->lesson_order)
            ->limit(1)
            ->orderBy('lesson_order', 'ASC')
            ->unionAll(
                $this->query()->getQuery()
                    ->where('course_id', $currentLesson->course_id)
                    ->where('lesson_order', '>', $currentLesson->lesson_order)
                    ->where('is_active', true)
                    ->whereNull('deleted_at')
                    ->orderBy('lesson_order', 'ASC')
                    ->limit(1)
            )->get();

        if ($lessons->count() < 2) {
            if ($lessons->first() && $lessons->first()->lesson_order < $currentLesson->lesson_order) {
                $previous = $lessons->first();
            } else {
                $next = $lessons->first();
            }
        } else {
            $previous = $lessons->first();
            $next = $lessons->last();
        }

        return [
            'previous_lesson' => $previous ?? null,
            'next_lesson' => $next ?? null
        ];
    }
}
