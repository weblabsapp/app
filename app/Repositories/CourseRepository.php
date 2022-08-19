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
     * @return mixed
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
     * @return array
     */
    public function getProgressCount(string $accountId, string $courseId)
    {
        $courseLessons = Lesson::query()
            ->where('course_id', $courseId)
            ->onlyActive()
            ->get()
            ->all();

        $courseProgress = LessonProgress::query()
            ->leftJoin('lessons', function (JoinClause $query) use ($accountId) {
                $query->on('lessons_progress.lesson_id', '=', 'lessons.id');
                $query->where('lessons_progress.account_id', $accountId);
                $query->where('lessons_progress.deleted_at', '=', null);
            })
            ->join('enrolls', function (JoinClause $query) {
                $query->on('lessons.course_id', '=', 'enrolls.course_id');
                $query->where('enrolls.deleted_at', '=', null);
            })
            ->orderBy('lessons_progress.id', 'DESC')
            ->get()
            ->all();

        $inProgressLessons = $enrolledCompletedLessons = 0;
        $pendingLessons = array_diff(array_column($courseLessons, 'id'), array_column($courseProgress, 'lesson_id'));

        foreach ($courseProgress as $progress) {
            if ($progress->is_completed) {
                $enrolledCompletedLessons++;
            } else {
                $inProgressLessons++;
            }
        }

        return [
            'pending' => count($pendingLessons),
            'in_progress' => $inProgressLessons,
            'completed' => $enrolledCompletedLessons
        ];
    }
}
