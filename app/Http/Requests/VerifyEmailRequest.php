<?php

namespace App\Http\Requests;

use App\Rules\TokenExpiry;
use App\Rules\TokenValidity;
use Illuminate\Foundation\Http\FormRequest;

class VerifyEmailRequest extends FormRequest
{
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
        return [
            'token' => [
                'required',
                'string',
                app(TokenValidity::class, [
                    'request' => $this // need to pass this request object
                ]),
                app(TokenExpiry::class, [
                    'request' => $this // need to pass this request object
                ])
            ]
        ];
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return [
            'token' => __('invalid token')
        ];
    }
}
