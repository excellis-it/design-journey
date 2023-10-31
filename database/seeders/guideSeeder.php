<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guide;

class guideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $guides = [
            [
                'image' => asset("frontend_assets/assets/guides/guide-1.jpg"),
                'title' => 'Beauty & Wellness Small Business Design Guide',
                'small_description' => 'Stay informed! Prior to your visit, we encourage reviewing essential details about your appointment, ensuring a seamless experience tailored to your needs.',
                'whats_inside' => 'Stay informed! Prior to your visit, we encourage reviewing essential details about your appointment, ensuring a seamless experience tailored to your needs.',
            ],
            [
                'image' => asset("frontend_assets/assets/guides/guide-2.jpg"),
                'title' => 'Social Media Guide',
                'small_description' => 'Stay informed! Prior to your visit, we encourage reviewing essential details about your appointment, ensuring a seamless experience tailored to your needs.',
                'whats_inside' => 'Stay informed! Prior to your visit, we encourage reviewing essential details about your appointment, ensuring a seamless experience tailored to your needs.',
            ],
            [
                'image' => asset("frontend_assets/assets/guides/guide-3.jpg"),
                'title' => 'How to Track the Progress of Your Designers Work',
                'small_description' => 'Stay informed! Prior to your visit, we encourage reviewing essential details about your appointment, ensuring a seamless experience tailored to your needs.',
                'whats_inside' => 'Stay informed! Prior to your visit, we encourage reviewing essential details about your appointment, ensuring a seamless experience tailored to your needs.',
            ],
            [
                'image' => asset("frontend_assets/assets/guides/guide-4.jpg"),
                'title' => 'How To Prepare Your Business for the Holiday Season',
                'small_description' => 'Stay informed! Prior to your visit, we encourage reviewing essential details about your appointment, ensuring a seamless experience tailored to your needs.',
                'whats_inside' => 'Stay informed! Prior to your visit, we encourage reviewing essential details about your appointment, ensuring a seamless experience tailored to your needs.',
            ],
            [
                'image' => asset("frontend_assets/assets/guides/guide-5.jpg"),
                'title' => 'Digital Ads Inspiration and Guidelines for 2021',
                'small_description' => 'Stay informed! Prior to your visit, we encourage reviewing essential details about your appointment, ensuring a seamless experience tailored to your needs.',
                'whats_inside' => 'Stay informed! Prior to your visit, we encourage reviewing essential details about your appointment, ensuring a seamless experience tailored to your needs.',
            ],
            [
                'image' => asset("frontend_assets/assets/guides/guide-6.jpg"),
                'title' => 'How to Reach New Customers by Using Informal Communication',
                'small_description' => 'Stay informed! Prior to your visit, we encourage reviewing essential details about your appointment, ensuring a seamless experience tailored to your needs.',
                'whats_inside' => 'Stay informed! Prior to your visit, we encourage reviewing essential details about your appointment, ensuring a seamless experience tailored to your needs.',
            ],
        ];

        foreach ($guides as $guide) {
            Guide::create($guide);
        }

    }
}
