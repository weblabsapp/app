<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $account_id
 * @property string $lesson_id
 * @property bool $is_completed
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class LessonProgress extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $table = 'lessons_progress';

    protected $fillable = [
        'account_id',
        'lesson_id',
        'is_completed',
    ];
}
