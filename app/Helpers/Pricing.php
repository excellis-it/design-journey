<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Payment;

class Pricing
{

    public static function SubscriptionCheck()
    {
        
        $user = Auth::user();
        $active_subscription = Payment::where('user_id',$user->id)->where('subscription_status','Active')->where('expiry_date','>',date('Y-m-d'))->first();
        if ($active_subscription) {
            return true;
        } else {
            return false;
        }
    }

    
}