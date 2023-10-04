<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\homeCms;

class homeCmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $homeCms = new homeCms();
        $homeCms->banner_image = asset('frontend_assets/assets/images/feature-background-image-1.jpg');
        $homeCms->section1_1st_title = 'Submit your request';
        $homeCms->section1_1st_details = 'Let us know what you need. Share references and upload your brand assets';
        $homeCms->section1_2nd_title = 'Your designers gets to work';
        $homeCms->section1_2nd_details = 'Get instantly matched with the best designers for the job.';
        $homeCms->section1_3rd_title = 'Receive your design';
        $homeCms->section1_3rd_details = 'Give us your feedback. We will revise your designs as many times as needed.';
        $homeCms->section2_1st_image = asset('frontend_assets/assets/images/feature-background-image-2.jpg');
        $homeCms->section2_1st_title = 'We protect your rights and privacy';
        $homeCms->section2_1st_details = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
        $homeCms->section2_2nd_image = asset('frontend_assets/assets/images/feature-background-image-1.jpg');
        $homeCms->section2_2nd_title = 'We always anonymize your data';
        $homeCms->section2_2nd_details = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
        $homeCms->section2_3rd_image = asset('frontend_assets/assets/images/feature-background-image.jpg');
        $homeCms->section2_3rd_title = 'We are committed to public research';
        $homeCms->section2_3rd_details = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
        $homeCms->section3_image = asset('frontend_assets/assets/images/feature-background-image-1.jpg');
        $homeCms->section3_title = 'Meet your virtual design team';
        $homeCms->section3_detail = 'Design Journey provides you with vetted designers for a flat monthly fee. No hiring, no contracts, no stress.';
        $homeCms->section3_title1 = 'Lorem Ipsum is simply dummy text of the printing ';
        $homeCms->section3_detail1 = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters';
        $homeCms->section3_title2 = 'Lorem Ipsum is simply dummy text of the printing';
        $homeCms->section3_detail2 = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters';
        $homeCms->section3_title3 = 'Lorem Ipsum is simply dummy text of the printing';
        $homeCms->section3_detail3 = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters';
        $homeCms->section3_title4 = 'Lorem Ipsum is simply dummy text of the printing';
        $homeCms->section3_detail4 = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters';
        $homeCms->section3_title5 = 'Lorem Ipsum is simply dummy text of the printing';
        $homeCms->section3_detail5 = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters';
        $homeCms->section4_title = 'Manage everything from one simple platform';
        $homeCms->section4_detail = 'Submit and prioritize your requests, Manage your different brands, Manage your different brands, Manage your different brands.';
        $homeCms->section4_video_link = 'https://www.youtube.com/watch?v=JgHfx2v9zOU';
        $homeCms->section4_image1 = asset('frontend_assets/assets/images/video-img-1.jpg');
        $homeCms->section4_image2 = asset('frontend_assets/assets/images/video-img-2.jpg');
        $homeCms->section4_image3 = asset('frontend_assets/assets/images/video-img-3.jpg');
        $homeCms->section4_image4 = asset('frontend_assets/assets/images/video-img-4.jpg');
        $homeCms->section5_title1 = 'Fast & Reliable';
        $homeCms->section5_detail1 = 'Get your design back in 1-2 business days.';
        $homeCms->section5_title2 = 'Professional Designers';
        $homeCms->section5_detail2 = 'Work with battle-tested professionals only.';
        $homeCms->section5_title3 = 'Fixed Monthly Rate';
        $homeCms->section5_detail3 = 'Work with battle-tested professionals only.';
        $homeCms->section5_title4 = 'Flexible & Scalable';
        $homeCms->section5_detail4 = 'No contracts. Scale up or down as you go.';
        $homeCms->frequently_qs1 = 'Read necessary information before visits';
        $homeCms->frequently_ans1 = 'Prepare questions that the patient should answer when registering for an online consultation. We will send them to him before the visit in the form of a survey to which he will also be able to attach his research results.';
        $homeCms->frequently_qs2 = 'Automatic SMS reminders';
        $homeCms->frequently_ans2 = 'Prepare questions that the patient should answer when registering for an online consultation. We will send them to him before the visit in the form of a survey to which he will also be able to attach his research results.';
        $homeCms->frequently_qs3 = 'A unique link for each patient';
        $homeCms->frequently_ans3 = 'Prepare questions that the patient should answer when registering for an online consultation. We will send them to him before the visit in the form of a survey to which he will also be able to attach his research results.';
        $homeCms->frequently_qs4 = 'Informing you about new possibilities';
        $homeCms->frequently_ans4 = 'Prepare questions that the patient should answer when registering for an online consultation. We will send them to him before the visit in the form of a survey to which he will also be able to attach his research results.';
        $homeCms->service_business_title = 'Serving Businesses of Every Size with Digital and Print Designs';
        $homeCms->service_business_image = asset('frontend_assets/assets/images/cta-phone.png');
        $homeCms->save();
       
    }
}

