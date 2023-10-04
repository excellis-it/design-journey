<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SolutionsController extends Controller
{
    //

    public function socialMediaDesign()
    {
        
        return view('frontend.solution.social-media-design');
    }

    public function websiteDesign()
    {
        return view('frontend.solution.website-design');
    }

    public function illustrationDesign()
    {
        return view('frontend.solution.illustration-design');
    }

    public function presentationDesign()
    {
        return view('frontend.solution.presentation-design');
    }
}
