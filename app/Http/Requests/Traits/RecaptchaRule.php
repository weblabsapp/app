<?php

namespace App\Http\Requests\Traits;

use App\Rules\RecaptchaValidation;

trait RecaptchaRule
{
    /**
     * @var bool
     */
    public $forceRecaptcha = false;

    /**
     * @return bool
     */
    public function isRecaptchaRequired(): bool
    {
        if (request()->session()->has('request_attempts')) {

            $attempts = request()->session()->get('request_attempts');

            return $attempts > 2;
        }

        return $this->forceRecaptcha;
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