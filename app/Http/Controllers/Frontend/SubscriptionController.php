<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use Session;

class SubscriptionController extends Controller
{
    //
    public function subscriptionSubmit(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'user_email' => 'required|email',
        ]);

        $check_email = Subscription::where('email', $request->user_email)->first();
        if($check_email){
            return redirect()->back()->with('error', 'Email Already Subscribed!');
        }

        $subscription = new Subscription();
        $subscription->name = $request->user_name;
        $subscription->email = $request->user_email;
        $subscription->save();

        $request->session()->put('subscriber_email', $request->user_email);

        return redirect()->back()->with('message', 'Thanks for subscribing!');
        
    }

    public function checkSubscriptionMail(Request $request)
    {
        // $subscriber_email = $request->session()->get('subscriber_email');
        $subscription = Subscription::where('email', $request->email)->first();
        if($subscription){
            return response()->json(['data' => true, 'message' => 'Email already subscribed!']);
        }else{
            return response()->json(['data' => false, 'message' => 'Email not subscribed!']);
        }
    }

    public function closeSubscriptionModal(Request $request)
    {
        
        session()->put('close-subscription-modal', true);
        $closeModal = request()->session()->get('close-subscription-modal');
        if($closeModal == true)
        {
            return response()->json(['status' => true, 'message' => 'Modal closed!']);
        }else{
            return response()->json(['status' => false, 'message' => 'Modal not closed!']);
        }
        
        
    }
}
