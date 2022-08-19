<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Ramsey\Uuid\Validator\GenericValidator;

class UuidValidator implements Rule
{
    private GenericValidator $genericUuidValidator;

    private string $attribute;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(GenericValidator $genericUuidValidator)
    {
        $this->genericUuidValidator = $genericUuidValidator;
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
        $this->attribute = $attribute;

        return $this->genericUuidValidator->validate($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('invalid uuid', [
            'attribute' => str_replace('_', ' ', $this->attribute)
        ]);
    }
}
