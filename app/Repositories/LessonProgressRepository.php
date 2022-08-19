<?php

namespace App\Repositories;

use App\Models\Lesson;
use App\Models\LessonProgress;
use Czim\Repository\BaseRepository;
use Illuminate\Database\Query\JoinClause;

class LessonProgressRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return LessonProgress::class;
    }

    /**
     * Get tag of (last) lesson in progress
     *
     * @param string $accountId
     * @param null $courseId
     * @return \Illuminate\Database\Eloquent\HigherOrderBuilderProxy|mixed|null
     */
    public function getLastEnrolledLessonTag(string $accountId, $courseId = null)
    {
        $progress = Lesson::query()
            ->rightJoin('lessons_progress', function (JoinClause $query) use ($accountId) {
                $query->on('lessons_progress.lesson_id', '=', 'lessons.id');
                $query->where('lessons_progress.account_id', $accountId);
                $query->where('lessons_progress.deleted_at', '=', null);
            })
            ->join('enrolls', function (JoinClause $query) {
                $query->on('lessons.course_id', '=', 'enrolls.course_id');
                $query->where('lessons.deleted_at', '=', null);
            })
            ->orderBy('lessons_progress.id', 'DESC')
            ->limit(1)
            ->first();

        if ($progress) {
            return $progress->tag;
        }

        return Lesson::query()
            ->where('course_id', $courseId)
            ->orderBy('lesson_order', 'ASC')
            ->first()
            ->tag;
    }

    /**
     * Create progress for started lesson
     *
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function createProgress(array $data)
    {
        $query = $this->query()->setModel(new LessonProgress());

        $progress = $query
            ->where(['account_id' => $data['account_id'], 'lesson_id' => $data['lesson_id']])
            ->first();

        if (!$progress) {
            $progress = $query->create($data);
        }

        return $progress;
    }

    /**
     * @param string $accountId
     * @param string $lessonId
     * @return void
     */
    public function markAsCompleted(string $accountId, string $lessonId)
    {
        $this->query()
            ->where('account_id', $accountId)
            ->where('lesson_id', $lessonId)
            ->update(['is_completed' => true]);
    }
}
