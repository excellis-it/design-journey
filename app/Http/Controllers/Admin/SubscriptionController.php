<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Jobs\SendQueueEmail;

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
        
        // Use a faster queue driver like Redis or Beanstalkd
        $job = (new SendQueueEmail($details))
            ->onQueue('high-priority');
        
        dispatch($job);
        
        return redirect()->back()->with('message', 'Email Send Successfully');
        

    }
}
