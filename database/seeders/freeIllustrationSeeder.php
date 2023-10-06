<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IllustrationCategory;

class freeIllustrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            [
                'name' => 'Seasonal',
                'slug' => 'seasonal',
            ],
            [
                'name' => 'Marketing',
                'slug' => 'marketing',
            ],
            [
                'name' => 'Business coach',
                'slug' => 'business-coach',
            ],
            [
                'name' => 'Holidays',
                'slug' => 'holidays',
            ],
            [
                'name' => 'Hygiene and health',
                'slug' => 'hygiene-health',
            ],
            [
                'name' => 'Cities & monuments',
                'slug' => 'cities-monuments',
            ],
            [
                'name' => 'Entertainment',
                'slug' => 'entertainment',
            ],
            [
                'name' => 'Science',
                'slug' => 'science',
            ],
            [
                'name' => 'Shopping',
                'slug' => 'shopping',
            ],
            [
                'name' => 'Environment',
                'slug' => 'environment',
            ],
            [
                'name' => 'Geography',
                'slug' => 'geography',
            ],
            [
                'name' => 'People & activities',
                'slug' => 'people-activities',
            ],
            [
                'name' => 'Professions',
                'slug' => 'professions',
            ],
            [
                'name' => 'Sport & recreation',
                'slug' => 'sport-recreation',
            ],
        ];

        foreach ($categories as $value) {
            $illustration_category = new IllustrationCategory;
            $illustration_category->category_name = $value['name'];
            $illustration_category->category_slug = $value['slug'];
            $illustration_category->save();
        }

    }
}
