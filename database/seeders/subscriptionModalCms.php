<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubscriptionCms;

class subscriptionModalCms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $subscription = new SubscriptionCms();
        $subscription->title = 'Stay in the loop with the latest updates and exclusive content.';
        $subscription->image = 'subscription/infographics.jpg';
        $subscription->save();

    }
}
