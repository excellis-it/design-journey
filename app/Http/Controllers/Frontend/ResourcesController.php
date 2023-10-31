<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IllustrationCategory;
use App\Models\IllustrationCategoryImage;
use App\Models\Guide;

class ResourcesController extends Controller
{
    //

    public function freeIllustration()
    {
        $illustration_categories = IllustrationCategory::orderBy('id', 'desc')->get();
        $illustration_images = IllustrationCategoryImage::orderBy('id', 'desc')->get();
        return view('frontend.resources.free-illustration',compact('illustration_categories'));
    }

    public function freeIcon()
    {
        return view('frontend.resources.free-icon');
    }

    public function guides()
    {
        $guides = Guide::orderBy('id', 'desc')->get();
        return view('frontend.resources.guides',compact('guides'));
    }

    public function casestudies()
    {
        return view('frontend.resources.case-studies');
    }
}
