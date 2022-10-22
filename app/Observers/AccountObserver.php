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
     * Trigger before creating a model
     *
     * @param Account $account
     */
    public static function creating(Account $account)
    {
        // Hash password
        $account->password = Hash::needsRehash($account->password)
            ? Hash::make($account->password)
            : $account->password;
    }

    /**
     * Trigger after creating a model
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

    /**
     * Trigger before deleting a model
     *
     * @param Account $account
     * @return void
     */
    public static function deleting(Account $account)
    {
        $account->setInactive();
    }

    /**
     * Trigger after deleting a model
     *
     * @param Account $account
     * @return void
     */
    public static function deleted(Account $account)
    {
        // Delete admin record related to this account
        if ($account->isForceDeleting()) {
            $account->admin && $account->admin->forceDelete();
        } else {
            $account->admin && $account->admin->delete();
        }
    }
}
