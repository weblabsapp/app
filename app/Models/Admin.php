<?php

namespace App\Models;

use App\Models\Traits\Activatable;
use App\Models\Traits\UuidPrimary;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $id
 * @property string $account_id
 * @property bool $is_active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Admin extends Model
{
    use HasFactory,
        Activatable,
        UuidPrimary,
        SoftDeletes;

    protected $fillable = [
        'account_id', 'is_active'
    ];

    /**
     * Get Account
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id', 'id');
    }
}
