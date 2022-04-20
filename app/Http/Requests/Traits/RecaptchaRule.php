<?php

namespace App\Http\Requests\Traits;

use App\Rules\RecaptchaValidation;

trait RecaptchaRule
{
    /**
     * @return bool
     */
    public function isRecaptchaRequired(): bool
    {
        request()->attributes->set('recaptcha_required', false);

        if (request()->session()->has('request_attempts')) {

            $attempts = request()->session()->get('request_attempts');

            return $attempts > 2;
        }

        return false;
    }

    /**
     * @return array
     */
    public function addRecaptchaRule(): array
    {
        if ($this->isRecaptchaRequired()) {

            request()->attributes->set('recaptcha_required', true);

            return ['g-recaptcha-response' => new RecaptchaValidation()];
        }

        return [];
    }
}