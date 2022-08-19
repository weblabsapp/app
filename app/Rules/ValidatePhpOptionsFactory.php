<?php

namespace App\Rules;

use App\Enums\CoursesTagsEnum;
use Illuminate\Contracts\Validation\Rule;

class ValidatePhpOptionsFactory implements Rule
{
    private string $courseTag;

    private bool $passes = true;

    private string $message;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($courseTag)
    {
        $this->courseTag = $courseTag;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (!is_array($value)) {
            return false;
        }

        switch ($this->courseTag) {
            case CoursesTagsEnum::PHP_COURSE_TAG:
                $validator = new ValidatePhpOptions();
                $this->passes = $validator->passes($attribute, $value);
                $this->message = $validator->message();
                break;
            case CoursesTagsEnum::JAVASCRIPT_COURSE_TAG:
            case CoursesTagsEnum::PYTHON_COURSE_TAG:
            default:
                break;
        }

        return $this->passes;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}
