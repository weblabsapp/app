<?php

namespace App\Http\Requests;


use App\Enums\GendersEnum;
use App\Http\Requests\Traits\RecaptchaRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SignupRequest extends FormRequest
{
    use RecaptchaRule;

    // One upper, one lower, one digit and one special char. 8 chars min.
    const PASSWORD_REGEX = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%%^\\&*()_+,.\\/;\':"-]).{8,}$/';

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'email' => ['required', 'email:rfc,dns'],
            'password' => [
                'required',
                'confirmed',
                sprintf('regex:%s', self::PASSWORD_REGEX),
            ],
            'gender' => ['required', Rule::in(GendersEnum::getGenders())]
        ];

        $this->forceRecaptcha = true;

        return array_merge($rules, $this->addRecaptchaRule());
    }

    /**
     * Error messages
     *
     * @return string[]
     */
    public function messages()
    {
        return [
            'email.required' => 'invalid_email_address',
            'email.email' => 'invalid_email_address',
            'password.required' => 'password_required',
            'password.regex' => 'weak_password',
            'password.confirmed' => 'password_confirm_not_match_password',
            'gender.in' => 'Please select a valid gender'
        ];
    }
}
