<?php

namespace App\Exceptions;


class DuplicateEntityException extends \Exception
{
    public function context()
    {
        return ['entity_id' => $this->message];
    }
}
