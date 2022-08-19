<?php

namespace App\Models;

use App\Models\Traits\UuidPrimary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $id
 * @property string $sandbox_id
 * @property string $volume_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Sandbox extends Model
{
    use HasFactory,
        UuidPrimary,
        SoftDeletes;

    public $fillable = [
        'id',
        'account_id',
        'sandbox_id',
        'volume_id'
    ];
}
