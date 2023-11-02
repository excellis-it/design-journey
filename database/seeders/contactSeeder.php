<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContactUsCms;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ContactUsCms::create([
            'text' => 'Join today and get 20% off your plan.',
            'image' => 'contact_us/contact.jpg',
        ]);

        

    }
}
