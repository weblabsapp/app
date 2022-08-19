<?php

namespace App\Console\Commands;

use App\Mail\KickOffMail;
use App\Mail\VerificationEmail;
use App\Models\EmailSubscription;
use Illuminate\Console\Command;
use Illuminate\Mail\PendingMail;
use Illuminate\Support\Facades\Mail;

class NotifyKickOff extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'site:notify-kick-off';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a kick off notification for all subscribed users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        EmailSubscription::query()
            ->where('notify', 1)->get()
            ->map(function (EmailSubscription $subscription) {
                echo "Sending email to: {$subscription->email} ... \n";
                Mail::to($subscription->email)->send(
                    app()->make(KickOffMail::class, [
                        'subscription' => $subscription
                    ])
                );
            });

        return 0;
    }
}
