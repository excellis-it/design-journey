<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\GeneralCms;

class General
{
    public static function GeneralCmsContent()
    {
        $general_cms = GeneralCms::first();
        if($general_cms != ''){
            return $general_cms;
        }else{
            return null;
        }
    }
}
