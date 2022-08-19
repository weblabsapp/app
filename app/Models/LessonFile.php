<?php

namespace App\Models;

use App\Models\Traits\UuidPrimary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $id
 * @property string $account_id
 * @property string $lesson_id
 * @property string $file_name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class LessonFile extends Model
{
    use HasFactory,
        UuidPrimary,
        SoftDeletes;

    protected $table = 'lessons_files';

    protected $fillable = [
        'account_id',
        'lesson_id',
        'file_name'
    ];

    /**
     * Get lesson this file belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id', 'id');
    }
}
