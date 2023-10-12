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
                'logo' => asset('admin_assets/assets/type_logo/brand.svg'),
            ],
            [
                'name' => 'Web Design',
                'slug' => 'web-design',
                'details' => 'Eye-catching webiste design and landing page design',
                'logo' => asset('admin_assets/assets/type_logo/web.svg'),
            ],
            [
                'name' => 'Digital Design',
                'slug' => 'digital-design',
                'details' => 'Social Media Graphics,Email Graphics,Digital ads etc',
                'logo' => asset('admin_assets/assets/type_logo/digital.svg'),
            ],
            [
                'name' => 'Print Design',
                'slug' => 'print-design',
                'details' => 'Highly impactful print graphics',
                'logo' => asset('admin_assets/assets/type_logo/print.svg'),
            ],
            [
                'name' => 'Illustration Design',
                'slug' => 'illustration-design',
                'details' => 'Custom-made illustration,icons and infographic',
                'logo' => asset('admin_assets/assets/type_logo/illustration.svg'),
            ],
            [
                'name' => 'Corporate Design',
                'slug' => 'corporate-design',
                'details' => 'From custom presentation to top business reports',
                'logo' => asset('admin_assets/assets/type_logo/corporate.svg'),
            ],
        ];
        
        foreach ($types as $value) {
            $type_add = new Type();
            $type_add->name = $value['name'];
            $type_add->slug = $value['slug'];
            $type_add->details = $value['details'];
            $type_add->logo = $value['logo'];
            $type_add->save();
        }
    }
}
