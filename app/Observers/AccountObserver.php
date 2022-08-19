<?php

namespace App\Observers;


use App\Mail\VerificationEmail;
use App\Models\Account;
use Illuminate\Mail\PendingMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AccountObserver
{
    /**
     * Map values before creating DB record
     * @param Account $account
     */
    public static function creating(Account $account)
    {
        // Hash password
        $account->password = Hash::make($account->password);
    }

    /**
     * Trigger event after creating model
     *
     * @param Account $account
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public static function created(Account $account)
    {
        Mail::to($account->email)
            ->when(empty($account->social_id), function (PendingMail $mail) use ($account) {
                $mail->send(
                    app()->make(VerificationEmail::class, [
                        'account' => $account
                    ])
                );
            });
    }
}
