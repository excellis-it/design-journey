<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HomeCms;
use App\Models\Blog;


class HomeController extends Controller
{
    //
    public function home()
    {
        $home_content = HomeCms::first();
        $blogs = Blog::orderBy('id','desc')->where('status',1)->limit(3)->get();
        return view('frontend.home',compact('home_content','blogs'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function blogs()
    {
        $blogs = Blog::orderBy('id','desc')->where('status',1)->paginate(2);
        return view('frontend.blogs',compact('blogs'));
    }

    public function blogDetails($id)
    { 
        $blog_id = decrypt($id);
        $blog_details = Blog::find($blog_id);
        $similer_blogs = Blog::orderBy('id','desc')->where('status',1)->get();
        return view('frontend.blog-details',compact('blog_details','similer_blogs'));
    }
    
  
}
