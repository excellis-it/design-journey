<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $types = [
            [
                'name' => 'Brand Identity Design',
                'slug' => 'brand-identity-design',
                'details' => 'Authentic logo concepts and branding graphics',
            ],
            [
                'name' => 'Web Design',
                'slug' => 'web-design',
                'details' => 'Eye-catching webiste design and landing page design',
            ],
            [
                'name' => 'Digital Design',
                'slug' => 'digital-design',
                'details' => 'Social Media Graphics,Email Graphics,Digital ads etc',
            ],
            [
                'name' => 'Print Design',
                'slug' => 'print-design',
                'details' => 'Highly impactful print graphics',
            ],
            [
                'name' => 'Illustration Design',
                'slug' => 'illustration-design',
                'details' => 'Custom-made illustration,icons and infographic',
            ],
            [
                'name' => 'Corporate Design',
                'slug' => 'corporate-design',
                'details' => 'From custom presentation to top business reports',
            ],
        ];
        
        foreach ($types as $value) {
            $type_add = new Type();
            $type_add->name = $value['name'];
            $type_add->slug = $value['slug'];
            $type_add->details = $value['details'];
            $type_add->save();
        }
    }
}
