<?php

namespace App\Rules;

use App\Repositories\TokenMappingRepository;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TokenValidity implements Rule
{
    /**
     * @var TokenMappingRepository
     */
    private $tokenMappingRepository;

    /**
     * @var Request
     */
    private $request;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(Request $request, TokenMappingRepository $tokenMappingRepository)
    {
        $this->tokenMappingRepository = $tokenMappingRepository;
        $this->request = $request;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     * @throws \App\Exceptions\AbstractException
     */
    public function passes($attribute, $value)
    {
        $token = $this->tokenMappingRepository->findByMapTo($value);

        $actualToken = Crypt::decrypt($token->token);

        $isValidToken = !empty($actualToken)
            && !empty($actualToken['timestamp'])
            && !empty($actualToken['email']);

        tap_if($isValidToken, $this->request, function ($request) use ($actualToken) {
            $request->attributes->set('actual_token', $actualToken);
        });

        return $isValidToken;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('invalid token');
    }
}
