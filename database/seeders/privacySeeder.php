<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PrivacyPolicy;

class privacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PrivacyPolicy::create([
            'description' => 'At Design Journey, we value your trust and are committed to protecting your privacy. This Privacy Policy outlines how we collect, use, and safeguard your personal information. By using our services, you consent to the practices described in this policy.We collect information you provide when using our platform, including contact details, project requirements, and brand assets. We also use cookies and similar technologies to enhance your experience.We use your information to match you with suitable designers, deliver requested services, and provide updates. Your data helps us understand your preferences and improve our offerings.We may share your details with our network of designers solely for project fulfillment. Your information is never sold or shared for marketing purposes.We employ industry-standard measures to protect your information. However, no method of transmission is completely secure, and we cannot guarantee absolute security.You can update your preferences or request data deletion by contacting us. You may also opt out of promotional communications.We may update this policy from time to time. We will notify you of any changes by posting the new policy on this page. We encourage you to review this policy periodically for any updates.',
        ]);
    }
}
