<?php

namespace App\Models;

use App\Models\Traits\Activatable;
use App\Models\Traits\UuidPrimary;
use App\Observers\LessonObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Whitecube\NovaFlexibleContent\Value\FlexibleCast;

/**
 * @property string $id
 * @property string $course_id
 * @property string $title
 * @property string $tag
 * @property integer $topic_id
 * @property integer $lesson_order
 * @property string $explore_content
 * @property string $full_content
 * @property Model $command_options
 * @property string $macros
 * @property array $checklist
 * @property bool $is_active
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 *
 * @property Course $course
 * @property Topic $topic
 * @property LessonVideo|null $video
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
        'explore_content',
        'full_content',
        'is_active',
        'command_options',
        'complete_summaries',
        'macros'
    ];

    protected $casts = [
        'command_options' => FlexibleCast::class,
        'complete_summaries' => FlexibleCast::class
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
        return $this->belongsTo(Topic::class, 'topic_id', 'id')
            ->orderBy('topic_order');
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

    /**
     * Get completeness checklist
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function checklist()
    {
        return $this->hasMany(LessonCompletenessChecklist::class, 'lesson_id', 'id')
            ->orderBy('id');
    }

    /**
     * Get the video for this lesson
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function video()
    {
        return $this->hasOne(LessonVideo::class, 'lesson_id', 'id');
    }
}
