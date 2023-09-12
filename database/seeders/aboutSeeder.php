<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class aboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $about = new About;
        $about->about_image = asset('frontend_assets/assets/images/about-us.png');
        $about->title = 'About Us';
        $about->description = 'ManyPixels is an on-demand creative service providing thousands of businesses around the globe with quality, fast and affordable design.Founded in 2018, we are now one of the leading design subscription service on the market.Our goal is to help businesses of all sizes and industries scale up their creative content production.';
        $about->icon1 = asset('frontend_assets/assets/images/vl-1.svg');
        $about->title1 = 'Customer first';
        $about->details1 = 'Taste can be subjective, so we’re never happy with the results unless you are.';
        $about->icon2 = asset('frontend_assets/assets/images/vl-2.svg');
        $about->title2 = 'Urgency and focus';
        $about->details2 = 'We produce high-quality results fast, and always work to deliver our best.';
        $about->icon3 = asset('frontend_assets/assets/images/vl-3.svg');
        $about->title3 = 'Lead the way';
        $about->details3 = 'We don’t settle for the status quo and strive to innovate relentlessly.';
        $about->icon4 = asset('frontend_assets/assets/images/vl-4.svg');
        $about->title4 = 'Great design is not a luxury';
        $about->details4 = 'Proving every day that design can be high-quality, fast and affordable.';
        $about->icon5 = asset('frontend_assets/assets/images/vl-5.svg');
        $about->title5 = 'TeamwoWork as a team...';
        $about->details5 = 'Great results can only be achieved by great teamwork.';
        $about->icon6 = asset('frontend_assets/assets/images/vl-6.svg');
        $about->title6 = '...and celebrate together';
        $about->details6 = 'We win as a team and make sure our successes don’t go unoticed.';
        $about->save();
    }
}
