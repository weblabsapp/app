<?php

namespace App\Http\Requests;


use App\Http\Requests\Traits\RecaptchaRule;
use Illuminate\Foundation\Http\FormRequest;

class EmailSubscriptionRequest extends FormRequest
{
    use RecaptchaRule;

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
            'email' => ['required', 'email']
        ];

        return array_merge($rules, $this->addRecaptchaRule());
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return [
            'email.required' => 'invalid_email_address',
            'email.email' => 'invalid_email_address',
        ];
    }
}
