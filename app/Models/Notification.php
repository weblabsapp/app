<?php

namespace App\Models;

use App\Models\Traits\UuidPrimary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $id
 * @property string $sender_id
 * @property string $receiver_id
 * @property string $type
 * @property array $placeholders
 */
class Notification extends Model
{
    use HasFactory,
        UuidPrimary,
        SoftDeletes;

    protected $casts = [
        'placeholders' => 'array'
    ];

    protected $fillable = [
        'receiver_id',
        'sender_id',
        'type',
        'placeholders'
    ];
}
