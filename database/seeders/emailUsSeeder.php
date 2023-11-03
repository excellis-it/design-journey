<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmailUs;

class emailUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        EmailUs::create([
            'email' => 'demo@gmail.com',
        ]);


    }
}
