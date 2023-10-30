<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HelpCenter;

class helpCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $help_centers = [
            [

                'name' => 'Account & Subscription',
                'title' => 'Sign in to Your Account',
                'details' => 'To sign in to your Design-journey account, click on the Sign In button at the top right of our website or go directly to https://www.excellis.co.in/design-journey/',
            ],
            [
                'name' => 'Account & Subscription',
                'title' => 'Manage Your Payment Method',
                'details' => 'To update your payment method, click on your name at the top right of the app, select Billing, and you will be routed to the Billing tab.Click on the edit card button, fill in your card information, and confirm by clicking Update.',
            ],
            [
                'name' => 'Account & Subscription',
                'title' => 'Update Your Billing Information',
                'details' => 'To update your billing address, click on your name at the top right of the app, select Billing. You will be routed to the Billing tab.',
            ],
            [
                'name' => 'Account & Subscription',
                'title' => 'Update Your Account Information',
                'details' => 'To update your account information, click on your Name at the top right of the app and then select Profile or Company.',
            ],
            [
                'name' => 'Design Journey',
                'title' => 'What is Design Journey?',
                'details' => 'Design Journey is a design tool that allows you to create and customize your own designs. You can use Design Journey to create logos, social media posts, posters, flyers, invitations, and more. Design Journey is available on your computer and your mobile device.',
            ],
            [
                'name' => 'Design Journey',
                'title' => 'How do I create a design?',
                'details' => 'To create a design, click on the Create a Design button at the top right of the app. You will be routed to the Templates tab where you can select a template to customize.',
            ],
            [
                'name' => 'Design Journey',
                'title' => 'How do I customize a design?',
                'details' => 'To customize a design, click on the template you want to customize. You will be routed to the Editor tab where you can customize your design.',  
            ],
            [
                'name' => 'Design Journey',
                'title' => 'How do I save a design?',
                'details' => 'To save a design, click on the Save button at the top right of the app. You will be routed to the My Designs tab where you can view all of your saved designs.',
            ],
            [
                'name' => 'Our Design Process',
                'title' => 'Daily Output & Delivery Time',
                'details'=> 'We deliver 1-2 designs per day. The delivery time depends on the complexity of the design. We deliver the first design within 24 hours of your request. We deliver the second design within 24 hours of your feedback on the first design. We deliver the third design within 24 hours of your feedback on the second design. We deliver the fourth design within 24 hours of your feedback on the third design. We deliver the fifth design within 24 hours of your feedback on the fourth design. We deliver the sixth design within 24 hours of your feedback on the fifth design. We deliver the seventh design within 24 hours of your feedback on the sixth design. We deliver the eighth design within 24 hours of your feedback on the seventh design. We deliver the ninth design within 24 hours of your feedback on the eighth design. We deliver the tenth design within 24 hours of your feedback on the ninth design.',
            ],
            [
                'name' => 'Our Design Process',
                'title' => 'How to Communicate with Your Designer?',
                'details' => 'You can communicate with your designer through the chat feature on the Design Journey app. To access the chat feature, click on the chat icon at the top right of the app. You can also communicate with your designer through email. To access your email, click on your name at the top right of the app and then select Profile or Company. You can also communicate with your designer through phone. To access your phone, click on your name at the top right of the app and then select Profile or Company.',
            ],
            [
                'name' => 'Our Design Process',
                'title' => 'Manage Your Requests',
                'details' => 'To manage your requests, click on your name at the top right of the app and then select Profile or Company. You will be routed to the Profile or Company tab where you can view all of your requests.',
            ],
            [
                'name' => 'Our Design Process',
                'title' => 'How to Request a Revision?',
                'details' => 'To request a revision, click on the Request a Revision button at the top right of the app. You will be routed to the Request a Revision tab where you can request a revision.',
            ],
            [
                'name' => 'Best Practices',
                'title' => 'How to Give Design Revisions',
                'details' => 'To give design revisions, click on the Request a Revision button at the top right of the app. You will be routed to the Request a Revision tab where you can give design revisions.',
            ],
            [
                'name' => 'Best Practices',
                'title' => 'How to Be Successful with Design Journey',
                'details' => 'To be successful with Design Journey, you need to be clear about what you want. You need to be clear about your brand, your target audience, and your goals. You need to be clear about your design needs. You need to be clear about your design preferences. You need to be clear about your design budget. You need to be clear about your design timeline. You need to be clear about your design feedback. You need to be clear about your design revisions. You need to be clear about your design approval. You need to be clear about your design delivery. You need to be clear about your design payment. You need to be clear about your design communication. You need to be clear about your design expectations. You need to be clear about your design requirements. You need to be clear about your design process. You need to be clear about your design goals. You need to be clear about your design objectives. You need to be clear about your design strategy.',
            ],
            [
                'name' => 'Support & Others',
                'title' => 'Report a Bug',
                'details' => 'To report a bug, click on the Report a Bug button at the top right of the app. You will be routed to the Report a Bug tab where you can report a bug.',
            ],
            [
                'name' => 'Support & Others',
                'title' => 'Give Us Feedback',
                'details' => 'To give us feedback, click on the Give Us Feedback button at the top right of the app. You will be routed to the Give Us Feedback tab where you can give us feedback.',
            ],
            [
                'name' => 'Support & Others',
                'title' => 'Our Referral Program',
                'details' => 'Our referral program is a way for you to earn money by',
            ],
            [
                'name' => 'Support & Others',
                'title' => 'Our Affiliate Program',
                'details' => 'Our affiliate program is a way for you to earn money by',
            ],
            [
                'name' => 'Tips & Tricks',          
                'title' => 'Where to Find Inspiration?',
                'details' => 'To find inspiration, click on the Inspiration button at the top right of the app. You will be routed to the Inspiration tab where you can find inspiration.',
            ],
            [
                'name' => 'Tips & Tricks',
                'title' => 'How to Request Digital Ads',
                'details' => 'To request digital ads, click on the Request Digital Ads button at the top right of the app. You will be routed to the Request Digital Ads tab where you can request digital ads.',
            ],
            [
                'name' => 'Tips & Tricks',
                'title' => 'How to Request a Brand Guide',
                'details' => 'To request a brand guide, click on the Request a Brand Guide button at the top right of the app. You will be routed to the Request a Brand Guide tab where you can request a brand guide.',
            ],
            [
                'name' => 'Tips & Tricks',
                'title' => 'How to Request a Book Cover Design',
                'details' => 'To request a book cover design, click on the Request a Book Cover Design button at the top right of the app. You will be routed to the Request a Book Cover Design tab where you can request a book cover design.',
            ]

        ];   
        
        foreach ($help_centers as $value) {
            $help_center = new HelpCenter;
            $help_center->name = $value['name'];
            $help_center->title = $value['title'];
            $help_center->details = $value['details'];
            $help_center->save();
        }
    }
}
