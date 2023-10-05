<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    //

    public function freeIllustration()
    {
        return view('frontend.resources.free-illustration');
    }

    public function freeIcon()
    {
        return view('frontend.resources.free-icon');
    }

    public function guides()
    {
        return view('frontend.resources.guides');
    }

    public function casestudies()
    {
        return view('frontend.resources.case-studies');
    }
}
