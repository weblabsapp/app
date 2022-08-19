<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class SandboxCreatedEvent
{
    use Dispatchable,
        SerializesModels;

    /**
     * @var array
     */
    public array $data;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(array $data = [])
    {
        $data['receiver_id'] = Auth::id();

        $this->data = $data;
    }
}
