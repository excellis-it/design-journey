<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Plan;
use App\Models\PlanSpecfication;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $plans = Plan::Orderby('id','desc')->get();
        return view('admin.plan.list')->with(compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.plan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'plan_name' => 'required|string|max:100',
            'plan_duration' => 'required',
            'plan_details' => 'required',
            'plan_price' => 'required|numeric',
        ]);
        $plan_store = new Plan;
        $plan_store->plan_name = $request->plan_name;
        $plan_store->plan_duration = $request->plan_duration;
        $plan_store->plan_details = $request->plan_details;
        $plan_store->plan_price = $request->plan_price;
        $plan_store->save();

        if ($request->specification) {
            foreach ($request->specification as $specification) {
                $specification_add = new PlanSpecfication();
                $specification_add->plan_id = $plan_store->id;
                $specification_add->specification_name = $specification;
                $specification_add->save();
            }
        }

        return back()->with('message','Plan Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $plan = Plan::where('id',$id)->with('Specification')->first();
        return view('admin.plan.edit')->with(compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update()
    {

    }
    public function planUpdate(Request $request)
    {
        
        $request->validate([
            'plan_name' => 'required|string|max:100',
            'plan_duration' => 'required',
            'plan_details' => 'required',
            'plan_price' => 'required|numeric',
        ]);

        $update_plan = Plan::where('id',$request->plan_id)->first();
        $update_plan->plan_name = $request->plan_name;
        $update_plan->plan_duration = $request->plan_duration;
        $update_plan->plan_details = $request->plan_details;
        $update_plan->plan_price = $request->plan_price;
        $update_plan->update();

        if ($request->specification) {
            $del_specification = PlanSpecfication::where('plan_id',$update_plan->id)->delete();
            foreach ($request->specification as $specification) {
                $specification_add = new PlanSpecfication();
                $specification_add->plan_id = $request->plan_id;
                $specification_add->specification_name = $specification;
                $specification_add->save();
            }
        }


        return redirect()->route('plans.index')->with('message', 'Plan updated successfully.');
    }

    public function deleteSpecification($id)
    {
        
        $del_specification = PlanSpecfication::where('id',$id)->delete();
        return redirect()->back()->with('message', 'Delete specification successfully.');

    }

   
    public function deletePlan($id)
    {
        $del_plan = Plan::where('id',$id)->delete();
        return back()->with('message','Plan deleted successfully');
    }
}
