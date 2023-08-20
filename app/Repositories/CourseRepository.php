<?php

namespace App\Repositories;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\LessonProgress;
use Czim\Repository\BaseRepository;
use Illuminate\Database\Query\JoinClause;

class CourseRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return Course::class;
    }

    /**
     * Get all courses
     *
     * @param $columns
     * @param bool $withInActive
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function all($columns = ['*'], bool $withInActive = false)
    {
        $query = $this->query();

        if ($withInActive) {
            $query->withInactive();
        }

        return $query->get($columns);
    }

    /**
     * Get course progress
     *
     * @param string $accountId
     * @param string $courseId
     * @param bool $getCount
     * @return array
     */
    public function getLessonsProgress(string $accountId, string $courseId, bool $getCount = true)
    {
        $courseLessons = Lesson::query()
            ->where('course_id', $courseId)
            ->onlyActive()
            ->get()
            ->all();

        $courseProgress = LessonProgress::query()
            ->select('lessons_progress.*')
            ->leftJoin('lessons', function (JoinClause $query) use ($accountId) {
                $query->on('lessons_progress.lesson_id', '=', 'lessons.id')
                    ->where('lessons.is_active', '=', true)
                    ->where('lessons.deleted_at', '=', null);
            })
            ->join('enrolls', function (JoinClause $query) use ($accountId) {
                $query->on('lessons.course_id', '=', 'enrolls.course_id');
                $query->where('enrolls.deleted_at', '=', null);
                $query->where('enrolls.account_id', $accountId);
            })
            ->where('lessons_progress.account_id', $accountId)
            ->where('lessons_progress.deleted_at', '=', null)
            ->orderBy('lessons_progress.id', 'ASC')
            ->get()
            ->all();

        if ($getCount) {
            $inProgressLessons = $completedLessons = 0;
            $pendingLessons = count(
                array_diff(
                    array_column($courseLessons, 'id'), array_column($courseProgress, 'lesson_id')
                )
            );

            foreach ($courseProgress as $progress) {
                if ($progress->is_completed) {
                    $completedLessons++;
                } else {
                    $inProgressLessons++;
                }
            }
        } else {
            $pendingLessonsIds = array_diff(array_column($courseLessons, 'id'), array_column($courseProgress, 'lesson_id'));
            $pendingLessons = Lesson::query()->whereIn('id', $pendingLessonsIds)->get()->all();

            $completedLessons = $inProgressLessons = [];

            foreach ($courseProgress as $progress) {
                if ($progress->is_completed) {
                    $completedLessons[] = $progress;
                } else {
                    $inProgressLessons[] = $progress;
                }
            }
        }

        return [
            'pending' => $pendingLessons,
            'in_progress' => $inProgressLessons,
            'completed' => $completedLessons
        ];
    }
}
