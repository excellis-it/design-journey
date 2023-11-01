<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TermCondition;

class termConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TermCondition::create([
            'description' => 'Welcome to Design Journey! These Terms and Conditions govern your use of our platform and services. By accessing or using our website, you agree to comply with and be bound by these terms.You may submit design requests through our platform. By doing so, you confirm that all provided information is accurate and that you have the legal authority to request the services. You also agree to pay the quoted price for the requested services.We may reject any request at our sole discretion. We reserve the right to cancel or suspend any order for any reason, including if we determine that the request is inappropriate or violates our policies.We may modify or terminate our services at any time. We may also change these terms at any time. We will notify you of any changes by posting the new terms on this page. We encourage you to review these terms periodically for any updates.',
        ]);
    }
}
