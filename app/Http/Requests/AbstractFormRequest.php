<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbstractFormRequest extends FormRequest
{
    /**
     * @var string
     */
    private $error;

    /**
     * @param string $error
     * @return void
     */
    public function setError(string $error)
    {
        $this->error = $error;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }
}
