<?php

namespace App\Models;

use App\Models\Traits\UuidPrimary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $lesson_id
 * @property string $text
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class LessonAiQuestion extends Model
{
    use HasFactory,
        UuidPrimary;

    protected $table = 'lessons_ai_questions';

    protected $fillable = ['lesson_id', 'text'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id', 'id');
    }
}
