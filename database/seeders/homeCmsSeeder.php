<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeCms;

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
        $homeCms = new HomeCms();
        $homeCms->banner_image = 'images/feature-background-image-1.jpg';
        $homeCms->section1_1st_title = 'Submit your request';
        $homeCms->section1_1st_details = 'Let us know what you need. Share references and upload your brand assets';
        $homeCms->section1_2nd_title = 'Your designers gets to work';
        $homeCms->section1_2nd_details = 'Get instantly matched with the best designers for the job.';
        $homeCms->section1_3rd_title = 'Receive your design';
        $homeCms->section1_3rd_details = 'Give us your feedback. We will revise your designs as many times as needed.';
        $homeCms->section2_1st_image = 'images/feature-background-image-2.jpg';
        $homeCms->section2_1st_title = 'We protect your rights and privacy';
        $homeCms->section2_1st_details = 'We are pledged to guard your rights, ensuring privacy in every step of your design journey.';
        $homeCms->section2_2nd_image = 'images/feature-background-image-1.jpg';
        $homeCms->section2_2nd_title = 'We always anonymize your data';
        $homeCms->section2_2nd_details = 'Our commitment to anonymity ensures protecting identities alongside fostering creativity.';
        $homeCms->section2_3rd_image = 'images/feature-background-image.jpg';
        $homeCms->section2_3rd_title = 'We are committed to public research';
        $homeCms->section2_3rd_details = 'Advancing innovation through dedicated research, driving excellence in our design journey.';
        $homeCms->section3_image = 'images/feature-background-image-1.jpg';
        $homeCms->section3_title = 'Meet your virtual design team';
        $homeCms->section3_detail = 'Design Journey provides you with vetted designers for a flat monthly fee. No hiring, no contracts, no stress.';
        $homeCms->section3_title1 = 'Creative Visionary';
        $homeCms->section3_detail1 = 'Possesses an extraordinary knack for conceptualizing unique and captivating designs. Their creations seamlessly blend innovation with functionality, ensuring your vision is brought to life in a visually stunning and practical manner.';
        $homeCms->section3_title2 = 'Strategic Design Mindset';
        $homeCms->section3_detail2 = 'Approaches design with a strategic focus. Armed with an in-depth understanding of market trends and user behavior, they ensure your project not only boasts exceptional aesthetics but also resonates deeply with your target audience, resulting in designs that drive impact and engagement';
        $homeCms->section3_title3 = 'Tech Expertise at Work';
        $homeCms->section3_detail3 = 'Adept at integrating cutting-edge technology with design. Their proficiency in digital platforms results in user interfaces that are not only visually striking but also intuitively navigable, leaving a lasting and positive impression on use.';
        $homeCms->section3_title4 = 'Artistic Brilliance';
        $homeCms->section3_detail4 = 'Elevates every project with boundless creativity. Their artistic touch infuses a sense of magic, transforming concepts into visually enchanting realities. From initial sketches to final renders, their attention to detail is a testament to their artistic prowess.';
        $homeCms->section3_title5 = 'Dynamic Design Innovator';
        $homeCms->section3_detail5 = 'Specializing in dynamic designs, they bring a level of engagement that captivates audiences. Through animations and interactive elements, they add an extra dimension to your project, creating an immersive and memorable user experience that sets your work apart.';
        $homeCms->section4_title = 'Manage everything from one simple platform';
        $homeCms->section4_detail = 'Submit and prioritize your requests, Manage your different brands, Manage your different brands, Manage your different brands.';
        $homeCms->section4_video_link = 'https://www.youtube.com/watch?v=JgHfx2v9zOU';
        $homeCms->section4_image1 = 'images/video-img-1.jpg';
        $homeCms->section4_image2 = 'images/video-img-2.jpg';
        $homeCms->section4_image3 = 'images/video-img-3.jpg';
        $homeCms->section4_image4 = 'images/video-img-4.jpg';
        $homeCms->section5_title1 = 'Fast & Reliable';
        $homeCms->section5_detail1 = 'Get your design back in 1-2 business days.';
        $homeCms->section5_title2 = 'Professional Designers';
        $homeCms->section5_detail2 = 'Work with battle-tested professionals only.';
        $homeCms->section5_title3 = 'Fixed Monthly Rate';
        $homeCms->section5_detail3 = 'Work with battle-tested professionals only.';
        $homeCms->section5_title4 = 'Flexible & Scalable';
        $homeCms->section5_detail4 = 'No contracts. Scale up or down as you go.';
        $homeCms->service_business_title = 'Serving Businesses of Every Size with Digital and Print Designs';
        $homeCms->service_business_image = 'images/cta-phone.png';
        $homeCms->save();
       
    }
}

