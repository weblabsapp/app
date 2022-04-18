<?php

namespace App\Models;

use App\Models\Traits\Uuid;
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
    use HasFactory, Uuid;

    public $fillable = [
        'id', 'email', 'notify'
    ];

    /**
     * @return string
     */
    public function generateToken()
    {
        return Crypt::encrypt($this->email);
    }
}
