<?php

namespace App\Mail;


use App\Models\Account;
use App\Repositories\TokenMappingRepository;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use \App\Mail\Traits\TokenMapping as TokenMappingTrait;

class VerificationEmail extends Mailable implements ShouldQueue
{
    use Queueable,
        SerializesModels,
        TokenMappingTrait;

    /**
     * @var Account
     */
    public $account;

    /**
     * Set to static in order to not serialize it
     *
     * @var TokenMappingRepository
     */
    private static $tokenMappingRepository;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Account $account, TokenMappingRepository $tokenMappingRepository)
    {
        $this->account = $account;
        self::$tokenMappingRepository = $tokenMappingRepository;

        $tokens = ['verify' => $account->verifyEmailToken()];
        if ($account->subscription) {
            $tokens['unsubscribe'] = $account->subscription->unsubscribeToken();
        }

        $this->initializeMappedToken($tokens);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email-templates.verification')
            ->with([
                'verifyToken' => $this->mappedTokens['verify'],
                'unsubscribeToken' => $this->mappedTokens['unsubscribe'] ?? null
            ]);
    }
}
