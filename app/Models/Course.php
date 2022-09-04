<?php

namespace App\Models;

use App\Models\Traits\Activatable;
use App\Models\Traits\UuidPrimary;
use App\Observers\CourseObserver;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $id
 * @property string $title
 * @property string $description
 * @property string $tag
 * @property string $logo
 * @property bool $is_active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 *
 * @property Lesson[] $lessons
 * @property Enroll[] $enrollments
 */
class Course extends Model
{
    use HasFactory,
        UuidPrimary,
        Activatable,
        SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'tag',
        'logo',
        'is_active'
    ];

    public static function boot()
    {
        parent::boot();

        static::observe(CourseObserver::class);
    }

    /**
     * Get course active lessons
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'course_id', 'id');
    }

    /**
     * Get course enrollments
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enrollments()
    {
        return $this->hasMany(Enroll::class, 'course_id', 'id');
    }

    /**
     * Get course topics
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function topics()
    {
        return $this->hasMany(Topic::class, 'course_id', 'id')
            ->orderBy('topic_order');
    }
}
