<?php

namespace App\Http\Requests;

use App\Enums\CoursesTagsEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CreateSandboxRequest extends FormRequest
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
     * @param $keys
     * @return array|\Illuminate\Routing\Route[]|null[]|object[]|string[]
     */
    public function all($keys = null)
    {
        return array_merge(parent::all($keys), [
            'course' => $this->route('courseTag')
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'course' => ['required', Rule::in(CoursesTagsEnum::getAllTags())]
        ];
    }
}
