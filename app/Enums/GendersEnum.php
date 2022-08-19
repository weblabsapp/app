<?php

namespace App\Enums;

class GendersEnum
{
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';
    const GENDER_UNKNOWN = 'unknown';

    /**
     * Get genders with labels
     *
     * @return string[]
     */
    public static function getGendersWithLabels()
    {
        return [
            self::GENDER_MALE => 'Male',
            self::GENDER_FEMALE => 'Female',
            self::GENDER_UNKNOWN => 'Prefer not to disclose'
        ];
    }

    /**
     * Get genders
     *
     * @return string[]
     */
    public static function getGenders()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
            self::GENDER_UNKNOWN
        ];
    }

    /**
     * Get label of a gender
     *
     * @param string $gender
     * @return string|null
     */
    public static function getGenderLabel(string $gender)
    {
        return self::getGendersWithLabels()[$gender] ?? null;
    }
}