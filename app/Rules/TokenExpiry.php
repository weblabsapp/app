<?php

namespace App\Rules;


use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class TokenExpiry implements Rule
{
    /**
     * @var Request
     */
    private $request;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     * @throws \App\Exceptions\AbstractException
     */
    public function passes($attribute, $value)
    {
        $timezone = env('APP_TIMEZONE');
        $actualToken = $this->request->get('actual_token');

        $tokenIssuedAt = Carbon::createFromTimestamp($actualToken['timestamp'], $timezone)
            ->addSeconds(env('VERIFY_EMAIL_TOKEN_EXPIRY'));

        tap($this->request, function ($request) use ($actualToken) {
            $request->attributes->set('email', $actualToken['email']);
        });

        return $tokenIssuedAt->greaterThan(Carbon::now($timezone));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('expired token');
    }
}
