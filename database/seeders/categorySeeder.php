<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\CategoryImage;


class categorySeeder extends Seeder
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
                'name' => 'Social media design',
                'slug' => 'social-media-design',
            ],
            [
                'name' => 'Display ads',
                'slug' => 'display-ads',
            ],
            [
                'name' => 'Websites',
                'slug' => 'websites',
            ],
            [
                'name' => 'Logos',
                'slug' => 'logos',
            ],
            [
                'name' => 'Illustrations',
                'slug' => 'illustrations',
            ],
            [
                'name' => 'Print',
                'slug' => 'print',
            ],
            [
                'name' => 'Infographics',
                'slug' => 'infographics',
            ],
            [
                'name' => 'Icons',
                'slug' => 'icons',
            ],
            [
                'name' => 'GIFs',
                'slug' => 'gifs',
            ],
            [
                'name' => 'Brand guides',
                'slug' => 'brand-guides',
            ],
            [
                'name' => 'Presentations',
                'slug' => 'presentations',
            ],
            [
                'name' => 'Motion graphics',
                'slug' => 'motion-graphics',
            ],
            [
                'name' => 'Landing pages',
                'slug' => 'landing-pages',
            ],
            [
                'name' => 'Stationary sets',
                'slug' => 'stationary-sets',
            ]
        ];


        $images = [asset('frontend_assets/assets/images/our_works/our_work1.jpeg'), asset('frontend_assets/assets/images/our_works/our_work2.jpeg'), asset('frontend_assets/assets/images/our_works/our_work3.jpeg'), asset('frontend_assets/assets/images/our_works/our_work4.jpeg'), asset('frontend_assets/assets/images/our_works/our_work.jpeg')];

        foreach ($categories as $value) {
            $category_add = new Category();
            $category_add->name = $value['name'];
            $category_add->slug = $value['slug'];
            $category_add->save();
        }

        // take 10 category and every category has 5 images in category_images table
        $category = Category::all()->take(10);
        foreach ($category as $value) {
            for ($i = 0; $i < 5; $i++) {
                $cat_image = new CategoryImage();
                $cat_image->category_id = $value->id;
                $cat_image->image = $images[$i];
                $cat_image->save();  
            }
        }
        
    }
}
