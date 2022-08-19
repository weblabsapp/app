<?php

namespace App\Models;

use App\Models\Traits\UuidPrimary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

/**
 * @property string $id
 * @property string $email
 * @property bool $notify
 * @property string $created_at
 * @property string $updated_at
 */
class EmailSubscription extends Model
{
    use HasFactory,
        UuidPrimary;

    public $fillable = [
        'id', 'email', 'notify'
    ];

    public static function boot()
    {
        parent::boot();
    }

    /**
     * @return string
     */
    public function unsubscribeToken()
    {
        return Crypt::encrypt($this->email);
    }
}
