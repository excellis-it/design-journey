<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use Auth;
use Session;

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

    public function myPlanCancel($id)
    {
        $cancel_plan = Payment::where('id', $id)->where('user_id', Auth::user()->id)->first();
        $cancel_plan->subscription_status = 'Cancelled';
        $cancel_plan->update();

        return back()->with('message','Your plan has been cancelled successfully.');
    }

    public function myPlanChange()
    {

        Session::put('change-plan', 'ok');
        return redirect()->route('pricing');
    }
}
