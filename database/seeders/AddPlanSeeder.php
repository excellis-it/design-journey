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
                'plan_name' => 'Essentials',
                'plan_details' => 'Create all of your everyday designs.',
                'plan_price' => '1998',
                'plan_duration' => 'monthly',
                'percentage' => '',
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
                'plan_name' => 'Accelerator',
                'plan_details' => 'Get double the output everyday.',
                'plan_price' => '3597',
                'plan_duration' => 'monthly',
                'percentage' => '',
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
                'plan_name' => 'Elite',
                'plan_details' => 'Collaborate in real time with your designer.',
                'plan_price' => '4998',
                'plan_duration' => 'monthly',
                'percentage' => '',
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
            [
                'plan_name' => 'Essentials',
                'plan_details' => 'Create all of your everyday designs.',
                'plan_price' => '5095',
                'plan_duration' => 'quarterly',
                'percentage' => '15',
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
                'plan_name' => 'Accelerator',
                'plan_details' => 'Create all of your everyday designs.',
                'plan_price' => '9172',
                'plan_duration' => 'quarterly',
                'percentage' => '15',
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
                'plan_name' => 'Elite',
                'plan_details' => 'Create all of your everyday designs.',
                'plan_price' => '12745',
                'plan_duration' => 'quarterly',
                'percentage' => '15',
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
                'plan_name' => 'Essentials',
                'plan_details' => 'Create all of your everyday designs.',
                'plan_price' => '19180',
                'plan_duration' => 'yearly',
                'percentage' => '20',
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
                'plan_name' => 'Accelerator',
                'plan_details' => 'Create all of your everyday designs.',
                'plan_price' => '34531',
                'plan_duration' => 'yearly',
                'percentage' => '20',
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
                'plan_name' => 'Elite',
                'plan_details' => 'Create all of your everyday designs.',
                'plan_price' => '47980',
                'plan_duration' => 'yearly',
                'percentage' => '20',
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
        ];

        foreach ($plans as $plan) {
            $planModel = new Plan();
            $planModel->plan_name = $plan['plan_name'];
            $planModel->plan_details = $plan['plan_details'];
            $planModel->plan_price = $plan['plan_price'];
            $planModel->plan_duration = $plan['plan_duration'];
            $planModel->percentage = $plan['percentage'];
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
