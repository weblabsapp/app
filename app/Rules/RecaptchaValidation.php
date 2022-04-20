<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use TimeHunter\LaravelGoogleReCaptchaV2\Facades\GoogleReCaptchaV2;

class RecaptchaValidation implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return GoogleReCaptchaV2::verifyResponse($value)->isSuccess();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'invalid_recaptcha';
    }
}
