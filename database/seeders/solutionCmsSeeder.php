<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SolutionCms;

class solutionCmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $solutionCms = new SolutionCms();
        $solutionCms->section1_title = 'Manage everything from one simple platform';
        $solutionCms->section1_content = 'Finding quality and reliable freelancers takes a lot of time and luck. In-house hires are expensive and can create HR drama.Submit and prioritize your requests Manage your different brandsCommunicate directly with your designer
        Invite your team and collaborate together';
        $solutionCms->section1_image = 'images/ssss.jpg';
        $solutionCms->section2_title = 'Boost engagement with eye-catching graphics';
        $solutionCms->section2_content = 'Designjourney provides you with vetted designers for a flat monthly fee. No hiring, no contracts, no stress.';
        $solutionCms->section2_image = 'images/ss.jpg';
        $solutionCms->save();
    }
}
