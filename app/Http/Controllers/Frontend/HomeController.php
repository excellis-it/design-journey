<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HomeCms;
use App\Models\Blog;
use App\Models\Category;


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
        $blogs = Blog::orderBy('id','desc')->where('status',1)->paginate(6);
        return view('frontend.blogs',compact('blogs'));
    }

    public function blogDetails($id)
    { 
        $blog_id = decrypt($id);
        $blog_details = Blog::find($blog_id);
        $similer_blogs = Blog::orderBy('id','desc')->where('status',1)->get();
        return view('frontend.blog-details',compact('blog_details','similer_blogs'));
    }

    public function ourWork()
    {
        $categories = Category::orderBy('id','desc')->get();
        return view('frontend.our-work',compact('categories'));
    }

    
     
}
