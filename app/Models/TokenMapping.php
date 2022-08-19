<?php

namespace App\Models;

use App\Models\Traits\Activatable;
use App\Models\Traits\UuidPrimary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $token
 * @property string $map_to
 * @property string $entity_source
 * @property string $created_at
 * @property string $updated_at
 */
class TokenMapping extends Model
{
    use HasFactory,
        UuidPrimary,
        Activatable;

    public $table = 'tokens_mapping';

    protected $fillable = [
        'id', 'token', 'map_to', 'entity_source', 'is_active'
    ];
}
