<?php

namespace App\Models;


use App\Models\Traits\Activatable;
use App\Models\Traits\UuidPrimary;
use App\Observers\AccountObserver;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

/**
 * @property string $id
 * @property string $email
 * @property string|null $name
 * @property string $password
 * @property string|null $username
 * @property string $gender
 * @property string|null $country
 * @property string|null $city
 * @property string|null $job_title
 * @property float|null $longitude
 * @property float|null $latitude
 * @property string|null $user_agent
 * @property array $social_profiles
 * @property \DateTime|null $email_verified_at
 * @property string|null $access_token
 * @property string|null $remember_token
 * @property string|null $email_verification_token
 * @property string|null $forget_password_token
 * @property boolean $is_active
 * @property boolean $is_email_hidden
 * @property \DateTime|null $created_at
 * @property \DateTime|null $updated_at
 * @property \DateTime|null $deleted_at
 *
 * @property Collection $enrollments
 *
 * @property EmailSubscription|null $subscription
 */
class Account extends Model implements Authenticatable
{
    use HasFactory,
        SoftDeletes,
        Activatable,
        UuidPrimary,
        AuthenticatableTrait;

    protected $rememberTokenName = 'remember_token';

    public $fillable = [
        'id',
        'email',
        'password',
        'username',
        'gender',
        'social_id',
        'social_type',
        'country',
        'city',
        'job_title',
        'longitude',
        'latitude',
        'user_agent',
        'social_profiles',
        'email_verified_at',
        'remember_token',
        'access_token',
        'email_verification_token',
        'forget_password_token',
        'is_active',
    ];

    protected $casts = [
        'social_profiles' => 'array'
    ];

    public static function boot()
    {
        parent::boot();

        self::observe(AccountObserver::class);
    }

    /**
     * Has one email subscription (ex.: Newsletter)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subscription()
    {
        return $this->hasOne(EmailSubscription::class, 'email', 'email');
    }

    /**
     * @return string
     */
    public function generateAccessToken()
    {
        $token = Str::random(64);
        $this->update(['access_token' => $token]);

        return $token;
    }

    /**
     * Get user access token
     *
     * @return string|null
     */
    public function getAccessToken()
    {
        return Crypt::encrypt($this->access_token);
    }

    /**
     * @return string
     */
    public function getRememberToken()
    {
        return Crypt::encrypt($this->getRememberTokenName());
    }

    /**
     * Get forget password token
     *
     * @return string
     */
    public function forgetPasswordToken(): string
    {
        if (!empty($this->forget_password_token)) {
            return $this->forget_password_token;
        }

        $token = Crypt::encrypt([
            'email' => $this->email,
            'timestamp' => Carbon::now()->timestamp
        ]);

        $this->update(['forget_password_token' => $token]);

        return $token;
    }

    /**
     * Get email verification token
     *
     * @return string
     */
    public function verifyEmailToken(): string
    {
        if (!empty($this->email_verification_token)) {
            return $this->email_verification_token;
        }

        $token = Crypt::encrypt([
            'email' => $this->email,
            'timestamp' => Carbon::now()->timestamp
        ]);

        $this->update(['email_verification_token' => $token]);

        return $token;
    }

    /**
     * Get enrolled courses
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enrollments()
    {
        return $this->hasMany(Enroll::class, 'account_id', 'id');
    }
}
