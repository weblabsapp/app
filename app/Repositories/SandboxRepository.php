<?php

namespace App\Repositories;

use App\Models\Sandbox;
use Czim\Repository\BaseRepository;
use Illuminate\Support\Facades\Auth;

class SandboxRepository extends BaseRepository
{
    /**
     * Returns specified model class name.
     *
     * @return string
     */
    public function model()
    {
        return Sandbox::class;
    }

    /**
     * @param array $data
     * @return Sandbox
     */
    public function createOrUpdate(array $data)
    {
        $accountId = Auth::id();

        $sandbox = parent::query()
            ->where('account_id', $accountId)
            ->withoutTrashed()
            ->first();

        if ($sandbox) {
            $sandbox->update($data);
        } else {
            $data['account_id'] = $accountId;

            $sandbox = parent::create($data);
        }

        return $sandbox;
    }
}
