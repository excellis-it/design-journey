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
        $homeCms->banner_title = 'Unlimited Graphic & Web Design';
        $homeCms->banner_description = 'Scale up your creative content production with a reliable and hassle-free design service.';
        $homeCms->banner_back_image = asset('frontend_assets/assets/images/feature-background-image-1.jpg');
        $homeCms->banner_image = asset('frontend_assets/assets/images/gif.gif');
        $homeCms->section1_main_title = 'Get your designs done in 1-2 days, not weeks';
        $homeCms->section1_1st_title = 'Submit your request';
        $homeCms->section1_1st_details = 'Let us know what you need. Share references and upload your brand assets.';
        $homeCms->section1_2nd_title = 'Your designers gets to work';
        $homeCms->section1_2nd_details = 'Get instantly matched with the best designers for the job.';
        $homeCms->section1_3rd_title = 'Receive your design';
        $homeCms->section1_3rd_details = 'Give us your feedback. We will revise your designs as many times as needed.';
        $homeCms->section2_image = asset('frontend_assets/assets/images/feature-background-image.jpg');
        $homeCms->section2_main_title = 'Hiring a designer should be simple';
        $homeCms->section2_main_description = 'Finding quality and reliable freelancers takes a lot of time and luck. In-house hires are expensive and can create HR drama.';
        $homeCms->section2_1st_title = 'We protect your rights and privacy';
        $homeCms->section2_1st_details = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
        $homeCms->section2_2nd_title = 'We always anonymize your data';
        $homeCms->section2_2nd_details = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
        $homeCms->section2_3rd_title = 'We are committed to public research';
        $homeCms->section2_3rd_details = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
        $homeCms->section3_main_title = 'Meet your virtual design team';
        $homeCms->section3_main_description = 'ManyPixels provides you with vetted designers for a flat monthly fee. No hiring, no contracts, no stress.';
        $homeCms->section3_image = asset('frontend_assets/assets/images/feature-background-image-2.jpg');
        $homeCms->section3_1st_title = 'Lorem Ipsum is simply dummy text of the printing ';
        $homeCms->section3_1st_description = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters';
        $homeCms->section3_2nd_title = 'Lorem Ipsum is simply dummy text of the printing';
        $homeCms->section3_2nd_description = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters';
        $homeCms->section3_3rd_title = 'Lorem Ipsum is simply dummy text of the printing ';
        $homeCms->section3_3rd_description = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters';
        $homeCms->section3_4th_title = 'Lorem Ipsum is simply dummy text of the printing ';
        $homeCms->section3_4th_description = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters';
        $homeCms->section3_5th_title = 'Lorem Ipsum is simply dummy text of the printing ';
        $homeCms->section3_5th_description = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters';
        $homeCms->section4_video_link = 'https://www.youtube.com/watch?v=WIl5F5rM5wQ';
        $homeCms->section4_image1 = asset('frontend_assets/assets/images/video-img-1.jpg');
        $homeCms->section4_image2 =  asset('frontend_assets/assets/images/video-img-2.jpg');
        $homeCms->section4_image3 =  asset('frontend_assets/assets/images/video-img-3.jpg');
        $homeCms->section4_image4 =  asset('frontend_assets/assets/images/video-img-4.jpg');
        $homeCms->section4_main_title = 'Manage everything from one simple platform';
        $homeCms->section4_main_description = 'Submit and prioritize your requests, Submit and prioritize your requests, Communicate directly with your designer, Invite your team and collaborate together';
        $homeCms->section5_title = 'Invite your team and collaborate together';
        $homeCms->section5_1st_content = 'Fast & Reliable';
        $homeCms->section5_1st_content_details = 'Get your design back in 1-2 business days.';
        $homeCms->section5_2nd_content = 'Fixed Monthly Rate';
        $homeCms->section5_2nd_content_details = 'Work with battle-tested professionals only.';
        $homeCms->section5_3rd_content = 'Professional Designers';
        $homeCms->section5_3rd_content_details = 'Work with battle-tested professionals only.';
        $homeCms->section5_4th_content = 'Flexible & Scalable';
        $homeCms->section5_4th_content_details = 'No contracts. Scale up or down as you go.';
        $homeCms->faq_section_title = 'No contracts. Scale up or down as you go.';
        $homeCms->faq_1st_question = 'Read necessary information before visits';
        $homeCms->faq_1st_answer = 'Prepare questions that the patient should answer when registering for an online consultation. We will send them to him before the visit in the form of a survey to which he will also be able to attach his research results.';
        $homeCms->faq_2nd_question = 'Automatic SMS reminders';
        $homeCms->faq_2nd_answer = 'Prepare questions that the patient should answer when registering for an online consultation. We will send them to him before the visit in the form of a survey to which he will also be able to attach his research results.';
        $homeCms->faq_3rd_question = 'A unique link for each patient';
        $homeCms->faq_3rd_answer = 'Prepare questions that the patient should answer when registering for an online consultation. We will send them to him before the visit in the form of a survey to which he will also be able to attach his research results.';
        $homeCms->faq_4th_question = 'Informing you about new possibilities';
        $homeCms->faq_4th_answer = 'Prepare questions that the patient should answer when registering for an online consultation. We will send them to him before the visit in the form of a survey to which he will also be able to attach his research results.';
        $homeCms->section6_title = 'Serving Businesses of Every Size with Digital and Print Designs';
        $homeCms->section6_image =  asset('frontend_assets/assets/images/cta-phone.png');
        $homeCms->save();
       
    }
}
