<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Solution;

class solutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $solution = new Solution();
        $solution->short_freelancer = 'Affordable';
        $solution->short_inhouse_designer = 'Expensive';
        $solution->short_design_journey = 'Affordable';
        $solution->long_freelancer = 'Affordable';
        $solution->long_inhouse_designer = 'Very Expensive';
        $solution->long_design_journey = 'Affordable';
        $solution->flat_rate_freelancer = 1;
        $solution->flat_rate_inhouse_designer = 0;
        $solution->flat_rate_design_journey = 1;
        $solution->hiring_freelancer = 'Difficult';
        $solution->hiring_inhouse_designer = 'Difficult';
        $solution->hiring_design_journey = 'Very Easy';
        $solution->verstatile_freelancer = 1;
        $solution->verstatile_inhouse_designer = 0;
        $solution->verstatile_design_journey = 1;
        $solution->turnaround_freelancer = 'Slow';
        $solution->turnaround_inhouse_designer = 'Quick';
        $solution->turnaround_design_journey = '1-2 Business Days';
        $solution->flexible_freelancer = 0;
        $solution->flexible_inhouse_designer = 0;
        $solution->flexible_design_journey = 1;
        $solution->save();

    }
}
