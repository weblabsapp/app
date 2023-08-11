<?php

namespace App\Models;

use App\Models\Traits\UuidPrimary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $id
 * @property string $lesson_id
 * @property string $video_url
 * @property string|null $poster
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class LessonVideo extends Model
{
    use HasFactory,
        UuidPrimary,
        SoftDeletes;

    protected $table = 'lessons_videos';

    protected $fillable = [
        'lesson_id',
        'video_url',
        'poster'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id', 'id');
    }
}
