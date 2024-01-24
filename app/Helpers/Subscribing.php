<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Payment;
use App\models\BookCall;
use App\Models\SubscriptionCms;

class Subscribing
{
    public static function NewsletterSubscription()
    {
        $subscriber_email = Session::get('subscriber_email');
        if($subscriber_email == null){
            return false;
        }else{
            return true;
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

    public static function BookACall()
    {
        $book_a_call = BookCall::first();
        if($book_a_call != ''){
            return $book_a_call;
        }else{
            return null;
        }
    }
}