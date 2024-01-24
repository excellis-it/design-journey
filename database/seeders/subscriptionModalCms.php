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
        $subscription->disclaimers = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. scrambled it to make a type specimen book. It has survived not only five centuries';
        $subscription->image = 'subscription/infographics.jpg';
        $subscription->save();

    }
}
