<?php

namespace Database\Seeders;

use App\Models\EmailSubscription;
use Illuminate\Database\Seeder;

class EmailSubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_ENV') != 'local') {
            return;
        }

        EmailSubscription::factory()->times(10)->create();
    }
}
