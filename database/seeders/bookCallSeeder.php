<?php

namespace Database\Seeders;
use App\Models\BookCall;
use Illuminate\Database\Seeder;

class bookCallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        BookCall::create([
            'link' => 'https://calendly.com/shreeja-c-o/30min',
        ]);

    }
}
