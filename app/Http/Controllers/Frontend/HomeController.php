<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HomeCms;
use App\Models\Blog;
use App\Models\Category;
use App\Models\CategoryImage;
use App\Models\Plan;
use App\Models\PlanSpecfication;
use Illuminate\Support\Facades\View;


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
        $categories = Category::orderBy('id','asc')->get();
        $category_images = CategoryImage::orderBy('id','desc')->paginate(21);
        
        return view('frontend.our-work',compact('categories','category_images'));
    }

    public function ourWorkFilter(Request $request)
    {
        $find_category = Category::where('slug',$request->category)->first();
        if($request->category == 'all'){
            $category_images = CategoryImage::orderBy('id','desc')->paginate(21);
        }else{
            $category_images = CategoryImage::where('category_id', $find_category->id)->paginate(21);
        }

        return response()->json(['view'=>(String)View::make('frontend.our-work-filter')->with(compact('category_images'))]);
    }

    public function pricing()
    {
        $plans = Plan::orderBy('id','asc')->where('plan_duration','monthly')->with('Specification')->take(3)->get();
        return view('frontend.pricing',compact('plans'));
    }

    public function pricingFilter(Request $request)
    {
        $plans = Plan::orderBy('id','asc')->where('plan_duration',$request->duration)->with('Specification')->take(3)->get();
        return response()->json(['view'=>(String)View::make('frontend.pricing-filter')->with(compact('plans'))]);
    }

    
     
}
