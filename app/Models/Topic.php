<?php

namespace App\Models;

use App\Observers\TopicObserver;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $title
 * @property string|null $slug
 * @property string $course_id
 * @property int $topic_order
 * @property bool $is_active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon|null $deleted_at
 */
class Topic extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'course_id',
        'topic_order',
        'is_active'
    ];

    public static function boot()
    {
        parent::boot();

        self::observe(TopicObserver::class);
    }

    /**
     * Get topic lessons
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'topic_id', 'id')
            ->orderBy('lesson_order');
    }
}
