<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HomeCms;
use App\Models\Blog;
use App\Models\Category;
use App\Models\About;
use App\Models\CategoryImage;
use App\Models\Plan;
use App\Models\PlanSpecfication;
use App\Models\HelpCenter;
use App\Models\ScreenShot;
use App\Models\Faq;
use App\Models\OurTeam;
use App\Models\Career;
use App\Models\JobApply;
use App\Models\Specification;
use App\Models\Testimonial;
use App\Models\PrivacyPolicy;
use App\Models\TermCondition;

use Illuminate\Support\Facades\View;


class HomeController extends Controller
{
    //
    public function home()
    {
        $home_content = HomeCms::first();
        $faqs = Faq::orderBy('id','desc')->get();
        $blogs = Blog::orderBy('id','desc')->where('status',1)->limit(3)->get();
        $screen_shots = ScreenShot::orderBy('id','desc')->get();
        $testimonials = Testimonial::orderBy('id','desc')->get();
        return view('frontend.home',compact('home_content','blogs','screen_shots','faqs','testimonials'));
    }

    public function perks()
    {
        $home_content = HomeCms::first();
        $blogs = Blog::orderBy('id','desc')->where('status',1)->limit(3)->get();
        return view('frontend.perks',compact('home_content','blogs'));
    }

    public function about()
    {
        $about_content = About::first();
        $our_teams = OurTeam::orderBy('id','desc')->get();
        return view('frontend.about',compact('about_content','our_teams'));
    }

    public function blogs()
    {
        $blogs = Blog::orderBy('id','desc')->where('status',1)->paginate(6);
        $home_content = HomeCms::first();
        return view('frontend.blogs',compact('blogs','home_content'));
    }

    public function blogDetails($id)
    { 
        $blog_id = decrypt($id);
        $blog_details = Blog::find($blog_id);
        $similer_blogs = Blog::where('blog_cat_id',$blog_details->blog_cat_id)->where('status',1)->get();
        return view('frontend.blog-details',compact('blog_details','similer_blogs'));
    }

    public function ourWork()
    {
        $categories = Category::orderBy('id','asc')->where('status',1)->get();
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
       
        $yearly_percent = Plan::where('plan_duration','yearly')->first();
        $quarterly_percent = Plan::where('plan_duration','quarterly')->first();
        $plans = Plan::orderBy('id','asc')->where('plan_duration','monthly')->with('Specification')->take(3)->get();
        return view('frontend.pricing',compact('plans','quarterly_percent','yearly_percent'));
    }

    public function pricingFilter(Request $request)
    {
        $plans = Plan::orderBy('id','asc')->where('plan_duration',$request->duration)->with('Specification')->take(3)->get();
        return response()->json(['view'=>(String)View::make('frontend.pricing-filter')->with(compact('plans'))]);
    }
    
    public function faq()
    {
        $faqs = Faq::orderBy('id','desc')->get();
        $home_content = HomeCms::first(); 
        return view('frontend.faq',compact('home_content','faqs'));
    }  
    
    public function helpCenter()
    {
        $help_centers = helpCenter::orderBy('id','desc')->get(); 
        return view('frontend.help-center',compact('help_centers'));
    }

    public function helpCenterDetails(Request $request)
    {
        $help_centers = helpCenter::where('id',$request->id)->first();
        return response()->json(['view'=>(String)View::make('frontend.help-center-details')->with(compact('help_centers'))]);
    }

    public function career()
    {
        $careers = Career::orderBy('id','desc')->get();
        return view('frontend.career',compact('careers'));
    }

    public function careerDetails($id)
    {
        $career_details = Career::find($id);
        return view('frontend.career-details',compact('career_details'));
    }

    public function careerForm($id)
    {
        
        $career_details = Career::find($id);
        return view('frontend.career-form',compact('career_details'));
    }

    public function services()
    {
        $categories = Category::orderBy('id','asc')->where('status',1)->get();
        return view('frontend.services',compact('categories'));
    }

    public function JobApply(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'introduction' => 'required',
            'experience' => 'required',
            'country' => 'required',
            'us_time_available' => 'required',
            'salary' => 'required',
            
        ]);

        $job_apply = new JobApply();
        $job_apply->career_id = $request->career_id;
        $job_apply->name = $request->name;
        $job_apply->email = $request->email;
        $job_apply->introduction = $request->introduction;
        $job_apply->experience = $request->experience;
        $job_apply->country = $request->country;
        $job_apply->us_time_available = $request->us_time_available;
        $job_apply->salary = $request->salary;

        if ($request->hasFile('resume_upload')) {
            $file= $request->file('resume_upload');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('resume_upload')->store('job_apply', 'public');
            $job_apply->resume_upload = $image_path;
        }

        $job_apply->save();

        return redirect()->back()->with('message','Job Applied Successfully');  
    }

    public function privacy()
    {
        $privacy = PrivacyPolicy::first();
        return view('frontend.privacy',compact('privacy'));
    }

    public function terms()
    {
        $terms = TermCondition::first();
        return view('frontend.term',compact('terms'));
    }

}
