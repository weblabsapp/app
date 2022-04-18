<?php

namespace App\Http\Requests;


use App\Exceptions\InvalidTokenException;
use App\Rules\ValidateUnsubscribeToken;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Crypt;

class EmailUnsubscribeRequest extends FormRequest
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
     * @param $keys
     * @return array
     */
    public function all($keys = null){
        if(empty($keys)){
            return parent::json()->all();
        }

        return collect(parent::json()->all())->only($keys)->toArray();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'token' => ['required', 'string']
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'token.required' => __('invalid unsubscribe token'),
            'token.valid' => __('invalid unsubscribe token')
        ];
    }

    /**
     * @return void
     * @throws \App\Exceptions\AbstractException
     */
    public function passedValidation()
    {
        try {
            $this->merge([
                'email' => Crypt::decrypt($this->input('token'))
            ]);
        } catch (DecryptException $exception) {
            InvalidTokenException::throw('invalid token');
        }
    }
}
