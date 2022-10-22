<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateSocialProfilesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'social_profile_web' => ['nullable', 'url'],
            'social_profile_github' => ['nullable', 'string', 'max:100', 'regex:/[A-Za-z0-9\_\-]+/i'],
            'social_profile_twitter' => ['nullable', 'string', 'max:100', 'regex:/[A-Za-z0-9\_\-]+/i'],
            'social_profile_instagram' => ['nullable', 'string', 'max:100', 'regex:/[A-Za-z0-9\_\-\.]+/i'],
            'social_profile_facebook' => ['nullable', 'string', 'max:100', 'regex:/[A-Za-z0-9\_\-\.]+/i'],
        ];
    }

    /**
     * Get validation error messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'social_profile_web' => __('invalid website url'),
            'social_profile_github' => __('invalid social username'),
            'social_profile_twitter' => __('invalid social username'),
            'social_profile_instagram' => __('invalid social username'),
            'social_profile_facebook' => __('invalid social username'),
        ];
    }
}
