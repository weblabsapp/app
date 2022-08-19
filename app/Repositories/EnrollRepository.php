<?php

namespace App\Repositories;

use App\Models\Enroll;
use App\Models\Lesson;
use App\Models\LessonProgress;
use Czim\Repository\BaseRepository;

class EnrollRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return Enroll::class;
    }

    /**
     * @param string $accountId
     * @param $courseId
     * @return bool|\Illuminate\Database\Eloquent\Model|null
     */
    public function enroll(string $accountId, $courseId)
    {
        $isEnrolled = $this->query()
            ->where(['account_id' => $accountId, 'course_id' => $courseId])
            ->first();

        if ($isEnrolled) {
            return $isEnrolled;
        }

        return $this->create([
            'account_id' => $accountId,
            'course_id' => $courseId
        ]);
    }

    /**
     * Get courses the user enrolled in
     *
     * @param string $accountId
     * @param bool $withCourses
     * @return \Illuminate\Support\Collection|null
     */
    public function getEnrollments(string $accountId, bool $withCourses = false)
    {
        $enrollments = $this->query()
            ->where('account_id', $accountId);

        if ($withCourses) {
            $enrollments->with('course');
        }

        $enrollments->whereRelation('course', 'id', '<>', null);

        return $enrollments->get()->collect();
    }

    /**
     * Dis-enroll a course
     *
     * @param string $accountId
     * @param string $courseId
     * @return void
     */
    public function disEnroll(string $accountId, string $courseId)
    {
        $enrollment = $this->query()
            ->where('account_id', $accountId)
            ->where('course_id', $courseId)
            ->first();

        if ($enrollment) {
            $enrollment->delete();
            $courseLessons = Lesson::query()
                ->select('id')
                ->where('course_id', $courseId)
                ->get()
                ->all();

            $lessonProgress = LessonProgress::query()
                ->where('account_id', $accountId)
                ->where('lesson_id', 'IN', array_column($courseLessons, 'id'))
                ->get()
                ->all();

            foreach ($lessonProgress as $progress) {
                $progress->delete();
            }
        }
    }
}
