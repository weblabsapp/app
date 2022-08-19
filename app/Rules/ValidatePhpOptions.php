<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidatePhpOptions implements Rule
{
    const VALID_PHP_OPTIONS = [
        'short_open_tag' => [0,1]
    ];

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        $options = $value;

        foreach ($options as $option => $value) {
            if (!array_key_exists($option, self::VALID_PHP_OPTIONS) || !in_array($value, self::VALID_PHP_OPTIONS[$option])) {
                return false;
            }
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Invalid PHP option.';
    }
}
