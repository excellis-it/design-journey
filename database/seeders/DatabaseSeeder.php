<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            assignRoleSeeder::class,
            assignAdminSeeder::class,
            homeCmsSeeder::class,
            aboutSeeder::class,
            categorySeeder::class,
            AddPlanSeeder::class,
            typeSeeder::class,
            solutionCmsSeeder::class,
            solutionSeeder::class,
            freeIllustrationSeeder::class,
            freeIconSeeder::class,
            helpCenterSeeder::class,
            faqSeeder::class,
            guideSeeder::class,
            termConditionSeeder::class,
            privacySeeder::class,
            contactSeeder::class,
            emailUsSeeder::class,
            extensionImageSeeder::class,
            footerCmsSeeder::class,
        ]);
    }
}
