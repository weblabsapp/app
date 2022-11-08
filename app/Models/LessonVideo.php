<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $lesson_id
 * @property string $file_name
 * @property string|null $poster
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class LessonVideo extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'lessons_videos';

    protected $fillable = [
        'lesson_id',
        'file_name'
    ];
}
