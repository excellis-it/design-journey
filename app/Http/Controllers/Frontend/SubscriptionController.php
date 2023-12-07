<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    //
    public function subscriptionSubmit(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'user_email' => 'required|email',
        ]);

        $subscription = new Subscription();
        $subscription->name = $request->user_name;
        $subscription->email = $request->user_email;
        $subscription->save();

        $request->session()->put('subscriber_email', $request->user_email);

        return redirect()->back()->with('message', 'Thanks for subscribing!');
        
    }
}
