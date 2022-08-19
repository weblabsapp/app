<?php

namespace App\Repositories;


use App\Exceptions\NotFoundException;
use App\Models\TokenMapping;
use Czim\Repository\BaseRepository;

class TokenMappingRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return TokenMapping::class;
    }

    /**
     * Get token mapped to shortened string
     *
     * @param string $mapTo
     * @return TokenMapping
     * @throws \App\Exceptions\AbstractException
     */
    public function findByMapTo(string $mapTo)
    {
        $token = $this->findBy('map_to', $mapTo);

        if (!$token) {
            NotFoundException::throw(__('invalid token'));
        }

        return $token;
    }

    /**
     * Set token as inactive
     *
     * @param string $mapTo
     * @return void
     * @throws \App\Exceptions\AbstractException
     */
    public function setInactive(string $mapTo)
    {
        $token = $this->findByMapTo($mapTo);

        if (!$token) {
            NotFoundException::throw(__('invalid token'));
        }

        $token->setInactive();
    }
}
