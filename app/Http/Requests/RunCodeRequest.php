<?php

namespace App\Http\Requests;

use App\Enums\CoursesTagsEnum;
use App\Rules\ValidatePhpOptionsFactory;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RunCodeRequest extends FormRequest
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
            'courseTag' => ['required', Rule::in(CoursesTagsEnum::getAllTags())],
            'code' => ['required', 'string'],
            'options' => [new ValidatePhpOptionsFactory($this->json('courseTag'))]
        ];
    }
}
