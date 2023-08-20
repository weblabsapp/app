<?php

namespace App\Models;

use App\Observers\LessonProgressObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $account_id
 * @property string $lesson_id
 * @property bool $is_completed
 * @property array $checklist_completeness
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
        'checklist_completeness'
    ];

    protected $casts = [
        'checklist_completeness' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();

        self::observe(LessonProgressObserver::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class, 'lesson_id', 'id');
    }
}
