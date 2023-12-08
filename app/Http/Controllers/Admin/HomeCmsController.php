<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeCms;
use App\Models\SolutionCms;
use App\Models\Solution;
use App\Models\About;
use App\Models\PrivacyPolicy;
use App\Models\TermCondition;
use App\Models\ContactUsCms;
use App\Models\FooterCms;
use App\Models\EmailUs;
use App\Models\SubscriptionCms;
use Illuminate\Support\Facades\Validator;



class HomeCmsController extends Controller
{
    //

    public function homeCms()
    {
        $homeCms = HomeCms::first();
        return view('admin.cms.homeCms',compact('homeCms'));
    }

    public function homeCmsUpdate(Request $request)
    {
        
        $request->validate([
            'main_title1' => 'required',
            'main_title3' => 'required',
            'banner_sub_title' => 'required',
            'section1_1st_title' => 'required',
            'section1_1st_details' => 'required',
            'section1_2nd_title' => 'required',
            'section1_2nd_details' => 'required',
            'section1_3rd_title' => 'required',
            'section1_3rd_details' => 'required',
            'section2_1st_title' => 'required',
            'section2_1st_details' => 'required',
            'section2_2nd_title' => 'required',
            'section2_2nd_details' => 'required',
            'section2_3rd_title' => 'required',
            'section2_3rd_details' => 'required',
            'section3_title' => 'required',
            'section3_detail' => 'required',
            'section3_title1' => 'required',
            'section3_detail1' => 'required',
            'section3_title2' => 'required',
            'section3_detail2' => 'required',
            'section3_title3' => 'required',
            'section3_detail3' => 'required',
            'section3_title4' => 'required',
            'section3_detail4' => 'required',
            'section3_title5' => 'required',
            'section3_detail5' => 'required',
            'section4_title' => 'required',
            'section4_detail' => 'required',
            'section4_video_link' => 'required',
            'section5_title1' => 'required',
            'section5_detail1' => 'required',
            'section5_title2' => 'required',
            'section5_detail2' => 'required',
            'section5_title3' => 'required',
            'section5_detail3' => 'required',
            'section5_title4' => 'required',
            'section5_detail4' => 'required',
            'service_business_title' => 'required',

        ]);
        $update_homeCms = HomeCms::find($request->home_cms_id);
        $update_homeCms->main_title1 = $request->main_title1;
        $update_homeCms->main_title3 = $request->main_title3;
        $request->main_title2;
        $main_title2 = implode(',', array_filter(array_map(function ($value) {
            return $value !== null ? $value : '';
        }, $request->main_title2)));
        
        $update_homeCms->main_title2 = $main_title2;
        $update_homeCms->banner_sub_title = $request->banner_sub_title;
        $update_homeCms->section1_1st_title = $request->section1_1st_title;
        $update_homeCms->section1_1st_details = $request->section1_1st_details;
        $update_homeCms->section1_2nd_title = $request->section1_2nd_title;
        $update_homeCms->section1_2nd_details = $request->section1_2nd_details;
        $update_homeCms->section1_3rd_title = $request->section1_3rd_title;
        $update_homeCms->section2_3rd_details = $request->section2_3rd_details;
        $update_homeCms->section3_title = $request->section3_title;
        $update_homeCms->section3_detail = $request->section3_detail;
        $update_homeCms->section3_title1 = $request->section3_title1;
        $update_homeCms->section3_detail1 = $request->section3_detail1;
        $update_homeCms->section3_title2 = $request->section3_title2;
        $update_homeCms->section3_detail2 = $request->section3_detail2;
        $update_homeCms->section3_title3 = $request->section3_title3;
        $update_homeCms->section3_detail3 = $request->section3_detail3;
        $update_homeCms->section3_title4 = $request->section3_title4;
        $update_homeCms->section3_detail4 = $request->section3_detail4;
        $update_homeCms->section3_title5 = $request->section3_title5;
        $update_homeCms->section3_detail5 = $request->section3_detail5;
        $update_homeCms->section4_title = $request->section4_title;
        $update_homeCms->section4_detail = $request->section4_detail;
        $update_homeCms->section4_video_link = $request->section4_video_link;
        $update_homeCms->section5_title1 = $request->section5_title1;
        $update_homeCms->section5_detail1 = $request->section5_detail1;
        $update_homeCms->section5_title2 = $request->section5_title2;
        $update_homeCms->section5_detail2 = $request->section5_detail2;
        $update_homeCms->section5_title3 = $request->section5_title3;
        $update_homeCms->section5_detail3 = $request->section5_detail3;
        $update_homeCms->section5_title4 = $request->section5_title4;
        $update_homeCms->section5_detail4 = $request->section5_detail4;
        $update_homeCms->service_business_title = $request->service_business_title;
        

        if ($request->hasFile('banner_image')) {
            $request->validate([
                'banner_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $banner_image= $request->file('banner_image');
            $bannerfile= date('YmdHi').$banner_image->getClientOriginalName();
            $banner_image_path = $request->file('banner_image')->store('home', 'public');
            $update_homeCms->banner_image = $banner_image_path;
        }

        if ($request->hasFile('section2_1st_image')) {
            $request->validate([
                'section2_1st_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section2_file= $request->file('section2_1st_image');
            $filename2= date('YmdHi').$section2_file->getClientOriginalName();
            $section2_image_path = $request->file('section2_1st_image')->store('home', 'public');
            $update_homeCms->section2_1st_image = $section2_image_path;
        }

        if ($request->hasFile('section2_2nd_image')) {
            $request->validate([
                'section2_2nd_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section2_file2= $request->file('section2_2nd_image');
            $filename3= date('YmdHi').$section2_file2->getClientOriginalName();
            $section2_image2_path = $request->file('section2_2nd_image')->store('home', 'public');
            $update_homeCms->section2_2nd_image = $section2_image2_path;
        }

        if ($request->hasFile('section2_3rd_image')) {
            $request->validate([
                'section2_3rd_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section2_file3= $request->file('section2_3rd_image');
            $filename4= date('YmdHi').$section2_file3->getClientOriginalName();
            $section2_image3_path = $request->file('section2_3rd_image')->store('home', 'public');
            $update_homeCms->section2_3rd_image = $section2_image3_path;
        }

        if ($request->hasFile('section3_image')) {
            $request->validate([
                'section3_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section3_file= $request->file('section3_image');
            $filename5= date('YmdHi').$section3_file->getClientOriginalName();
            $section3_image_path = $request->file('section3_image')->store('home', 'public');
            $update_homeCms->section3_image = $section3_image_path;
        }

        if ($request->hasFile('section4_image1')) {
            $request->validate([
                'section4_image1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section4_file= $request->file('section4_image1');
            $filename6= date('YmdHi').$section4_file->getClientOriginalName();
            $section4_image_path = $request->file('section4_image1')->store('home', 'public');
            $update_homeCms->section4_image1 = $section4_image_path;
        }

        if ($request->hasFile('section4_image2')) {
            $request->validate([
                'section4_image2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section4_file2= $request->file('section4_image2');
            $filename7= date('YmdHi').$section4_file2->getClientOriginalName();
            $section4_image2_path = $request->file('section4_image2')->store('home', 'public');
            $update_homeCms->section4_image2 = $section4_image2_path;
        }

        if ($request->hasFile('section4_image3')) {
            $request->validate([
                'section4_image3' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section4_file3= $request->file('section4_image3');
            $filename7= date('YmdHi').$section4_file3->getClientOriginalName();
            $section4_image3_path = $request->file('section4_image3')->store('home', 'public');
            $update_homeCms->section4_image3 = $section4_image3_path;
        }

        if ($request->hasFile('section4_image4')) {
            $request->validate([
                'section4_image4' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section4_file4= $request->file('section4_image4');
            $filename8= date('YmdHi').$section4_file4->getClientOriginalName();
            $section4_image4_path = $request->file('section4_image4')->store('home', 'public');
            $update_homeCms->section4_image4 = $section4_image4_path;
        }

        if ($request->hasFile('service_business_image')) {
            $request->validate([
                'service_business_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $service_business_file= $request->file('service_business_image');
            $filename9= date('YmdHi').$service_business_file->getClientOriginalName();
            $end_section_image = $request->file('service_business_image')->store('home', 'public');
            $update_homeCms->service_business_image = $end_section_image;
        }

        

        $update_homeCms->update();
        return back()->with('message','Home Cms updated successfully');

    }

    public function aboutCms()
    {
        $about = About::first();
        return view('admin.cms.aboutCms',compact('about'));
    }

    public function aboutCmsUpdate(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'title1' => 'required',
            'details1' => 'required',
            'title2' => 'required',
            'details2' => 'required',
            'title3' => 'required',
            'details3' => 'required',
            'title4' => 'required',
            'details4' => 'required',
            'title5' => 'required',
            'details5' => 'required',
            'title6' => 'required',
            'details6' => 'required',
            'customer_serve' => 'required',
            'design_hours_work' => 'required',
        ]);
        
        $update_about = About::find($request->about_cms_id);
        $update_about->title = $request->title;
        $update_about->description = $request->description;
        $update_about->customer_serve = $request->customer_serve;
        $update_about->design_hours_work = $request->design_hours_work;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('about', 'public');
            $update_about->about_image = $image_path;
        }
        if ($request->hasFile('icon1')) {
            $request->validate([
                'icon1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file1= $request->file('icon1');
            $filename1= date('YmdHi').$file1->getClientOriginalName();
            $image_path1 = $request->file('icon1')->store('about', 'public');
            $update_about->icon1 = $image_path1;
        }
        $update_about->title1 = $request->title1;
        $update_about->details1 = $request->details1;
        if ($request->hasFile('icon2')) {
            $request->validate([
                'icon2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file2= $request->file('icon2');
            $filename2= date('YmdHi').$file2->getClientOriginalName();
            $image_path2 = $request->file('icon2')->store('about', 'public');
            $update_about->icon2 = $image_path2;
        }
        $update_about->title2 = $request->title2;
        $update_about->details2 = $request->details2;
        if ($request->hasFile('icon3')) {
            $request->validate([
                'icon3' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file3= $request->file('icon3');
            $filename3= date('YmdHi').$file3->getClientOriginalName();
            $image_path3 = $request->file('icon3')->store('about', 'public');
            $update_about->icon3 = $image_path3;

        }
        $update_about->title3 = $request->title3;
        $update_about->details3 = $request->details3;
        if ($request->hasFile('icon4')) {
            $request->validate([
                'icon4' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file4= $request->file('icon4');
            $filename4= date('YmdHi').$file4->getClientOriginalName();
            $image_path4 = $request->file('icon4')->store('about', 'public');
            $update_about->icon4 = $image_path4;
        }
        $update_about->title4 = $request->title4;
        $update_about->details4 = $request->details4;
        if ($request->hasFile('icon5')) {
            $request->validate([
                'icon5' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file5= $request->file('icon5');
            $filename5= date('YmdHi').$file5->getClientOriginalName();
            $image_path5 = $request->file('icon5')->store('about', 'public');
            $update_about->icon5 = $image_path5;
        }
        $update_about->title5 = $request->title5;
        $update_about->details5 = $request->details5;
        if ($request->hasFile('icon6')) {
            $request->validate([
                'icon6' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file6= $request->file('icon6');
            $filename6= date('YmdHi').$file6->getClientOriginalName();
            $image_path6 = $request->file('icon6')->store('about', 'public');
            $update_about->icon6 = $image_path6;
        }
        $update_about->title6 = $request->title6;
        $update_about->details6 = $request->details6;
        $update_about->update();

        return back()->with('message','About Cms updated successfully');
    }

    public function solutionCms()
    {
        $solutionCms = SolutionCms::first();
        return view('admin.cms.solutionCms',compact('solutionCms'));
    }

    public function solutionCmsUpdate(Request $request)
    {
        $request->validate([
            'section1_title' => 'required',
            'section1_content' => 'required',
            'section2_title' => 'required',
            'section2_content' => 'required',
        ]);
        
        $update_soluition_cms = SolutionCms::find($request->solution_cms_id);
        $update_soluition_cms->section1_title = $request->section1_title;
        $update_soluition_cms->section1_content = $request->section1_content;
        if ($request->hasFile('section1_image')) {
            $request->validate([
                'section1_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('section1_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('section1_image')->store('solution', 'public');
            $update_soluition_cms->section1_image = $image_path;
        }
        $update_soluition_cms->section2_title = $request->section2_title;
        $update_soluition_cms->section2_content = $request->section2_content;
        if ($request->hasFile('section2_image')) {
            $request->validate([
                'section2_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file2= $request->file('section2_image');
            $filename2= date('YmdHi').$file2->getClientOriginalName();
            $image_path2 = $request->file('section2_image')->store('solution', 'public');
            $update_soluition_cms->section2_image = $image_path2;
        }
        $update_soluition_cms->update();

        return back()->with('message','Solution Cms updated successfully');
    }

    public function solutionEdit()
    {
        $solution = Solution::first();
        return view('admin.solution.edit',compact('solution'));
    }

    public function solutionUpdate(Request $request)
    {
        $request->validate([
            'short_freelancer' => 'required',
            'short_inhouse_designer' => 'required',
            'short_design_journey' => 'required',
            'long_freelancer' => 'required',
            'long_inhouse_designer' => 'required',
            'long_design_journey'=> 'required',
            'flat_rate_freelancer' => 'required',
            'flat_rate_inhouse_designer' => 'required',
            'flat_rate_design_journey' => 'required',
            'hiring_freelancer' => 'required',
            'hiring_inhouse_designer' => 'required',
            'hiring_design_journey' => 'required',
            'verstatile_freelancer' => 'required',
            'verstatile_inhouse_designer' => 'required',
            'verstatile_design_journey' => 'required',
            'turnaround_freelancer' => 'required',
            'turnaround_inhouse_designer' => 'required',
            'turnaround_design_journey' => 'required',
        ]);

        $update_solution = Solution::find($request->id);
        $update_solution->short_freelancer = $request->short_freelancer;
        $update_solution->short_inhouse_designer = $request->short_inhouse_designer;
        $update_solution->short_design_journey = $request->short_design_journey;
        $update_solution->long_freelancer = $request->long_freelancer;
        $update_solution->long_inhouse_designer = $request->long_inhouse_designer;
        $update_solution->long_design_journey = $request->long_design_journey;
        $update_solution->flat_rate_freelancer = $request->flat_rate_freelancer;
        $update_solution->flat_rate_inhouse_designer = $request->flat_rate_inhouse_designer;
        $update_solution->flat_rate_design_journey = $request->flat_rate_design_journey;
        $update_solution->hiring_freelancer = $request->hiring_freelancer;
        $update_solution->hiring_inhouse_designer = $request->hiring_inhouse_designer;
        $update_solution->hiring_design_journey = $request->hiring_design_journey;
        $update_solution->verstatile_freelancer = $request->verstatile_freelancer;
        $update_solution->verstatile_inhouse_designer = $request->verstatile_inhouse_designer;
        $update_solution->verstatile_design_journey = $request->verstatile_design_journey;
        $update_solution->turnaround_freelancer = $request->turnaround_freelancer;
        $update_solution->turnaround_inhouse_designer = $request->turnaround_inhouse_designer;
        $update_solution->turnaround_design_journey = $request->turnaround_design_journey;
        $update_solution->update();

        return back()->with('message','Solution updated successfully');
    }

    public function contactCms()
    {
        $contact_us = ContactUsCms::first();
        return view('admin.cms.contact-cms')->with(compact('contact_us'));
    }

    public function contactCmsUpdate(Request $request)
    {
        $request->validate([
            'text' => 'required',
        ]);

        $update_contact_cms = ContactUsCms::find($request->contact_cms_id);
        $update_contact_cms->text = $request->text;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:50000',
            ]);
            
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('contact_us', 'public');
            $update_contact_cms->image = $image_path;
        }

        $update_contact_cms->update();

        return back()->with('message','Contact Us Cms updated successfully');
    }

    public function privacyEdit()
    {
        $privacy = PrivacyPolicy::first();
        return view('admin.cms.privacy',compact('privacy'));
    }

    public function privacyUpdate(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);

        $update_privacy = PrivacyPolicy::find($request->id);
        $update_privacy->description = $request->description;
        $update_privacy->update();

        return back()->with('message','Privacy Policy updated successfully');
    }

    public function termsEdit()
    {
        $terms = TermCondition::first();
        return view('admin.cms.terms',compact('terms'));
    }

    public function termsUpdate(Request $request)
    {
        $request->validate([
            'description' => 'required',
        ]);

        $update_terms = TermCondition::find($request->id);
        $update_terms->description = $request->description;
        $update_terms->update();

        return back()->with('message','Terms & Condition updated successfully');
    }

    public function addEmail()
    {
        $email_us = EmailUs::first();
        return view('admin.cms.email-us',compact('email_us'));
    }

    public function updateEmail(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $update_email = EmailUs::find($request->email_us_id);
        $update_email->email = $request->email;
        $update_email->update();

        return back()->with('message','Email Us updated successfully');
    }

    public function subscriptionCms()
    {
        $subscription_cms = SubscriptionCms::first();
        return view('admin.cms.subscription-cms',compact('subscription_cms'));
    }

    public function subscriptionCmsUpdate(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $update_subscription_cms = SubscriptionCms::find($request->subscription_cms_id);
        $update_subscription_cms->title = $request->title;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:50000',
            ]);
            
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('subscription', 'public');
            $update_subscription_cms->image = $image_path;
        }

        $update_subscription_cms->update();

        return back()->with('message','Subscription Cms updated successfully');
    }

    public function footerCms()
    {
        $footer_cms = FooterCms::orderBy('id','desc')->get();
        return view('admin.cms.footerCms',compact('footer_cms'));
    }
}
