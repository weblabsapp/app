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
        EmailSubscription::factory()->times(10)->create();
    }
}
