<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Payment;
use App\Models\SubscriptionCms;

class Subscribing
{
    public static function NewsletterSubscription()
    {
        $subscriber_email = Session::get('subscriber_email');
        if($subscriber_email == null){
            return true;
        }else{
            return false;
        }
    }

    public static function SubcriptionCmsContent()
    {
        $subscription_cms = SubscriptionCms::first();
        if($subscription_cms != ''){
            return $subscription_cms;
        }else{
            return null;
        }
    }
}