<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GeneralCms;

class generalCmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        GeneralCms::create([
            'registration_title' => 'Create Account',
            'registration_image' => 'general_image/login_bg_larr.jpg',
            'login_title' => 'Login',
            'login_image' => 'general_image/login_bg_larr.jpg',
            'website_logo' => 'general_image/logo.png',
            'copyright_title' => 'Copyright © Design Journey 2023.',
        ]);

    }
}
