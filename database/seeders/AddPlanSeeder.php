<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\PlanSpecfication;
use Illuminate\Database\Seeder;

class AddPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'plan_name' => 'Advance',
                'plan_details' => 'Create all of your everyday designs.',
                'plan_price' => '549',
                'plan_duration' => 'monthly',
                'specification' => [
                    [
                        'specification_name' => '1 Daily Output',
                    ],
                    [
                        'specification_name' => '1-2 Days Delivery',
                    ],
                    [
                        'specification_name' => 'All Design Services',
                    ],  
                ],
            ],
            [
                'plan_name' => 'Business',
                'plan_details' => 'Get double the output everyday.',
                'plan_price' => '899',
                'plan_duration' => 'monthly',
                'specification' => [
                    [
                        'specification_name' => '2 Daily Output',
                    ],
                    [
                        'specification_name' => '1-2 Days Delivery',
                    ],
                    [
                        'specification_name' => 'All Design Services',
                    ],
                    [
                        'specification_name' => 'Motion Graphics Services',
                    ],
                    
                ],
            ],
            [
                'plan_name' => 'Designated Designer',
                'plan_details' => 'Collaborate in real time with your designer.',
                'plan_price' => '1,199',
                'plan_duration' => 'monthly',
                'specification' => [
                    [
                        'specification_name' => 'Designated Designer',
                    ],
                    [
                        'specification_name' => 'Same Day Delivery',
                    ],
                    [
                        'specification_name' => 'Real Time Slack Communication',
                    ],
                    [
                        'specification_name' => 'All Design Services',
                    ],
                    [
                        'specification_name' => 'Motion Graphics Services',
                    ],
                   
                ],
            ],
        ];

        foreach ($plans as $plan) {
            $planModel = new Plan();
            $planModel->plan_name = $plan['plan_name'];
            $planModel->plan_details = $plan['plan_details'];
            $planModel->plan_price = $plan['plan_price'];
            $planModel->plan_duration = $plan['plan_duration'];
            $planModel->save();

            foreach ($plan['specification'] as $specification) {
                $specificationModel = new PlanSpecfication();
                $specificationModel->plan_id = $planModel->id;
                $specificationModel->specification_name = $specification['specification_name'];
                $specificationModel->save();
            }
        }                                                                                                                                                           
    }
}
