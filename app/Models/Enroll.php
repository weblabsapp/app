<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $account_id
 * @property string $course_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 *
 * @property Course $course
 */
class Enroll extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'account_id',
        'course_id'
    ];

    /**
     * Get course info
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
