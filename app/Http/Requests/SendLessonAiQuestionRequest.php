<?php

namespace App\Http\Requests;

use App\Rules\UuidValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Validator\GenericValidator;

class SendLessonAiQuestionRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::check();
    }

    public function rules()
    {
        return [
            'question_id' => [new UuidValidator(new GenericValidator())]
        ];
    }
}