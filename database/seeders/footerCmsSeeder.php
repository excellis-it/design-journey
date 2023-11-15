<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FooterCms;

class footerCmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $footer_cms = [
            [
                'social_icon' => 'fab fa-facebook-f',
                'social_link' => 'https://www.facebook.com/',
            ],
            [
                'social_icon' => 'fab fa-twitter',
                'social_link' => 'https://twitter.com/',
            ],
            
            [
                'social_icon' => 'fab fa-linkedin-in',
                'social_link' => 'https://www.linkedin.com/',
            ],
            [
                'social_icon' => 'fab fa-youtube',
                'social_link' => 'https://www.youtube.com/',
            ], 
        ];
        foreach($footer_cms as $footer_cms){
            FooterCms::create($footer_cms);
        }
    }
}
