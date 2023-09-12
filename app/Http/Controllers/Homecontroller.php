<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HomeCms;


class HomeController extends Controller
{
    //
    public function home()
    {
        $home_content = HomeCms::first();
        return view('frontend.home',compact('home_content'));
    }

    public function about()
    {
        return view('frontend.about');
    }
    
  
}
