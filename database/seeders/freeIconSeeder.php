<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IconCategory;

class freeIconSeeder extends Seeder
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
                'name' => 'Internet Security',
                'slug' => 'internet-security',
            ],
            [
                'name' => 'Creative Tools',
                'slug' => 'creative-tools',
            ],
            [
                'name' => 'Frequently Asked Questions',
                'slug' => 'frequently-asked-questions',
            ],
            [
                'name' => 'Language Learning',
                'slug' => 'language-learning',
            ],
            [
                'name' => 'Learning',
                'slug' => 'learning',
            ],
            [
                'name' => 'Customer Reviews',
                'slug' => 'customer-reviews',
            ],
            [
                'name' => 'Digital Nomad',
                'slug' => 'digital-nomad',
            ],
            [
                'name' => 'Startups',
                'slug' => 'startups',
            ],
            [
                'name' => 'Ecommerce',
                'slug' => 'ecommerce',
            ],
            [
                'name' => 'Design Thinking',
                'slug' => 'design-thinking',
            ],
            [
                'name' => 'Business',
                'slug' => 'business',
            ],
            [
                'name' => 'Strategy',
                'slug' => 'strategy',
            ],
            [
                'name' => 'Contact Us',
                'slug' => 'contact-us',
            ],
            [
                'name' => 'Alphabet and Numbers',
                'slug' => 'alphabet-numbers',
            ],
        ];

        foreach ($categories as $value) {
            $illustration_category = new IconCategory;
            $illustration_category->category_name = $value['name'];
            $illustration_category->category_slug = $value['slug'];
            $illustration_category->save();
        }
    }
}
