<?php

namespace App\Mail;

use App\Mail\Traits\TokenMapping;
use App\Models\EmailSubscription;
use App\Repositories\TokenMappingRepository;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KickOffMail extends Mailable
{
    use SerializesModels,
        TokenMapping;

    /**
     * @var TokenMappingRepository
     */
    public static $tokenMappingRepository;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(EmailSubscription $subscription, TokenMappingRepository $tokenMappingRepository)
    {
        self::$tokenMappingRepository = $tokenMappingRepository;

        $this->initializeMappedToken(['unsubscribe' => $subscription->unsubscribeToken()]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email-templates.site-kickoff', [
            'unsubscribeToken' => $this->mappedTokens['unsubscribe']
        ]);
    }
}
