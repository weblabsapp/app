<?php

namespace App\Http\Requests;

use App\Enums\CountriesEnum;
use App\Enums\GendersEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateProfileAttributeRequest extends FormRequest
{
    public function all($keys = null)
    {
        $this->merge([
            'updated_attributes' => array_keys($this->json()->all()),
            'attribute' => $this->route('attribute')
        ]);

        return parent::all($keys);
    }

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
            'attribute' => [Rule::in(['name', 'email', 'job_title', 'country', 'city', 'gender', 'username'])],
            'updated_attributes.*' => [Rule::in(['name', 'username', 'email', 'job_title', 'country', 'city', 'gender', 'is_email_hidden'])],
            'name' => ['string', 'max:200'],
            'email' => ['email:rfc,dns', Rule::unique('accounts')->ignore($this->user()->id, 'id')],
            'gender' => [Rule::in(GendersEnum::getGenders())],
            'username' => ['alpha_dash', Rule::unique('accounts')->ignore($this->user()->id, 'id')->withoutTrashed()],
            'job_title' => ['string', 'max:200'],
            'country' => [Rule::in(CountriesEnum::getCountries())],
            'city' => ['alpha_dash']
        ];
    }

    /**
     * @return string[]
     */
    public function messages()
    {
        return [
            'attribute.in' => 'Unsupported profile attribute',
            'updated_attributes.*.in' => 'Unsupported profile attribute',
            'email.unique' => 'email_already_used'
        ];
    }
}
