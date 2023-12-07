<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    //
    public function subscriptionList(Request $request)
    {
        $subscriptions = Subscription::all();
        return view('admin.subscription.list', compact('subscriptions'));
        
    }

    public function subscriptionSendMail(Request $request)
    {
        $subscriptions = Subscription::all();
        return view('admin.subscription.send-mail',compact('subscriptions'));
    }

    public function subscriptionMailSubmit(Request $request)
    {
       
        $details = [
    		'subject' => $request->content,
            'email' => $request->email,
    	];
    	
        $job = (new \App\Jobs\SendQueueEmail($details))
            	->delay(now()->addSeconds(2)); 

        dispatch($job);
        echo "Mail send successfully !!";

    }
}
