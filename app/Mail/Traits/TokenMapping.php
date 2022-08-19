<?php

namespace App\Mail\Traits;

use App\Repositories\TokenMappingRepository;
use Illuminate\Support\Str;

/**
 * @property TokenMappingRepository $tokenMappingRepository
 */
trait TokenMapping
{
    /**
     * @var array
     */
    public $mappedTokens = [];

    /**
     * @param array $tokens
     * @return void
     */
    public function initializeMappedToken(array $tokens = [])
    {
        foreach ($tokens as $type => $token) {
            $this->mappedTokens[$type] = $this->getMappedToken($token)->map_to;
        }
    }

    /**
     * @param string $token
     * @return \App\Models\TokenMapping|\Illuminate\Database\Eloquent\Model
     */
    public function getMappedToken(string $token)
    {
        $mapTokenTo = Str::random();

        $existTokenMapping = self::$tokenMappingRepository
            ->findBy('token', $token);

        if ($existTokenMapping) {
            $existTokenMapping->setInactive();
        }

        return self::$tokenMappingRepository->create([
            'token' => $token,
            'map_to' => $mapTokenTo,
            'entity_source' => serialize($this)
        ]);
    }
}
