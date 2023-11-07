<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use Auth;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function myPlan()
    {
        $my_plans = Payment::where('user_id', Auth::user()->id)->orderBy('id','desc')->with('plan')->get();
        return view('user.myplan.list', compact('my_plans'));
    }

    public function myPlanDetails($id)
    {
        $plan_details = Payment::where('id', $id)->with('plan.Specification')->first();
        return view('user.myplan.details',compact('plan_details'));
    }
}
