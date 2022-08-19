<?php

namespace App\Models;

use App\Models\Traits\Activatable;
use App\Models\Traits\UuidPrimary;
use App\Observers\LessonObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $id
 * @property string $course_id
 * @property string $title
 * @property string $tag
 * @property integer $topic_id
 * @property integer $lesson_order
 * @property string $content
 * @property bool $is_active
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 *
 * @property Course $course
 * @property Topic $topic
 */
class Lesson extends Model
{
    use HasFactory,
        UuidPrimary,
        Activatable,
        SoftDeletes;

    protected $fillable = [
        'course_id',
        'title',
        'tag',
        'content',
        'is_active'
    ];

    public static function boot()
    {
        parent::boot();

        self::observe(LessonObserver::class);
    }

    /**
     * Get topic that lesson belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }

    /**
     * Get active course this lesson belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    /**
     * Get lesson progress
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function progress()
    {
        return $this->hasOne(LessonProgress::class, 'lesson_id', 'id');
    }
}
