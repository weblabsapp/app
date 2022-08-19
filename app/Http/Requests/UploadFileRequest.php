<?php

namespace App\Http\Requests;

use App\Enums\CoursesTagsEnum;
use App\Rules\UuidValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Ramsey\Uuid\Validator\GenericValidator;

class UploadFileRequest extends FormRequest
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
            'lesson_tag' => ['required'],
            'course_tag' => ['required', Rule::in(CoursesTagsEnum::getAllTags())],
            'file_name' => ['required']
        ];
    }
}
