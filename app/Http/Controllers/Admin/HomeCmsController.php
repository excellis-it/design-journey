<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeCms;
use App\Models\About;
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
            'banner_title' => 'required',
            'banner_description' => 'required',
            'section1_main_title' => 'required',
            'section1_1st_title' => 'required',
            'section1_1st_details' => 'required',
            'section1_2nd_title' => 'required',
            'section1_2nd_details' => 'required',
            'section1_3rd_title' => 'required',
            'section1_3rd_details' => 'required',
            'section2_main_title' => 'required',
            'section2_main_description' => 'required',
            'section2_1st_title' => 'required',
            'section2_1st_details' => 'required',
            'section2_2nd_title' => 'required',
            'section2_2nd_details' => 'required',
            'section2_3rd_title' => 'required',
            'section2_3rd_details' => 'required',
            'section3_main_title' => 'required',
            'section3_main_description' => 'required',
            'section3_1st_title' => 'required',
            'section3_1st_description' => 'required',
            'section3_2nd_title' => 'required',
            'section3_2nd_description' => 'required',
            'section3_3rd_title' => 'required',
            'section3_3rd_description' => 'required',
            'section3_4th_title' => 'required',
            'section3_4th_description' => 'required',
            'section3_5th_title' => 'required',
            'section3_5th_description' => 'required',
            'section4_main_title' => 'required',
            'section4_main_description' => 'required',
            'section4_video_link' => 'required',
            'section5_title' => 'required',
            'section5_1st_content' => 'required',
            'section5_1st_content_details' => 'required',
            'section5_2nd_content' => 'required',
            'section5_2nd_content_details' => 'required',
            'section5_3rd_content' => 'required',
            'section5_3rd_content_details' => 'required',
            'section5_4th_content' => 'required',
            'section5_4th_content_details' => 'required',
            'faq_section_title' => 'required',
            'faq_1st_question' => 'required',
            'faq_1st_answer' => 'required',
            'faq_2nd_question' => 'required',
            'faq_2nd_answer' => 'required',
            'faq_3rd_question' => 'required',
            'faq_3rd_answer' => 'required',
            'faq_4th_question' => 'required',
            'faq_4th_answer' => 'required',
            'section6_title' => 'required',

        ]);
        $update_homeCms = HomeCms::find($request->home_cms_id);
        $update_homeCms->banner_title = $request->banner_title;
        $update_homeCms->banner_description = $request->banner_description;
        if ($request->hasFile('banner_back_image')) {
            $request->validate([
                'banner_back_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('banner_back_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('banner_back_image')->store('home', 'public');
            $update_homeCms->banner_back_image = asset('storage/'.$image_path);
        }

        if ($request->hasFile('banner_image')) {
            $request->validate([
                'banner_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $banner_file= $request->file('banner_image');
            $filename1= date('YmdHi').$banner_file->getClientOriginalName();
            $banner_image_path = $request->file('banner_image')->store('home', 'public');
            $update_homeCms->banner_image = asset('storage/'.$banner_image_path);
        }

        $update_homeCms->section1_main_title = $request->section1_main_title;
        $update_homeCms->section1_1st_title = $request->section1_1st_title;
        $update_homeCms->section1_1st_details = $request->section1_1st_details;
        $update_homeCms->section1_2nd_title = $request->section1_2nd_title;
        $update_homeCms->section1_2nd_details = $request->section1_2nd_details;
        $update_homeCms->section1_3rd_title = $request->section1_3rd_title;
        $update_homeCms->section1_3rd_details = $request->section1_3rd_details;
        $update_homeCms->section2_main_title = $request->section2_main_title;
        $update_homeCms->section2_main_description = $request->section2_main_description;

        if ($request->hasFile('section2_image')) {
            $request->validate([
                'section2_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section2_file= $request->file('section2_image');
            $filename2= date('YmdHi').$section2_file->getClientOriginalName();
            $section2_image_path = $request->file('section2_image')->store('home', 'public');
            $update_homeCms->section2_image = asset('storage/'.$section2_image_path);
        }

        $update_homeCms->section2_1st_title = $request->section2_1st_title;
        $update_homeCms->section2_1st_details = $request->section2_1st_details;
        $update_homeCms->section2_2nd_title = $request->section2_2nd_title;
        $update_homeCms->section2_2nd_details = $request->section2_2nd_details;
        $update_homeCms->section2_3rd_title = $request->section2_3rd_title;
        $update_homeCms->section2_3rd_details = $request->section2_3rd_details;
        $update_homeCms->section3_main_title = $request->section3_main_title;
        $update_homeCms->section3_main_description = $request->section3_main_description;
        
        if ($request->hasFile('section3_image')) {
            $request->validate([
                'section3_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section3_file= $request->file('section3_image');
            $filename3= date('YmdHi').$section3_file->getClientOriginalName();
            $section3_image_path = $request->file('section3_image')->store('home', 'public');
            $update_homeCms->section3_image = asset('storage/'.$section3_image_path);
        }

        $update_homeCms->section3_1st_title = $request->section3_1st_title;
        $update_homeCms->section3_1st_description = $request->section3_1st_description;
        $update_homeCms->section3_2nd_title = $request->section3_2nd_title;
        $update_homeCms->section3_2nd_description = $request->section3_2nd_description;
        $update_homeCms->section3_3rd_title = $request->section3_3rd_title;
        $update_homeCms->section3_3rd_description = $request->section3_3rd_description;
        $update_homeCms->section3_4th_title = $request->section3_4th_title;
        $update_homeCms->section3_4th_description = $request->section3_4th_description;
        $update_homeCms->section3_5th_title = $request->section3_5th_title;
        $update_homeCms->section3_5th_description = $request->section3_5th_description;
        $update_homeCms->section4_main_title = $request->section4_main_title;
        $update_homeCms->section4_main_description = $request->section4_main_description;
        $update_homeCms->section4_video_link = $request->section4_video_link;

        if ($request->hasFile('section4_image1')) {
            $request->validate([
                'section4_image1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section4_file1= $request->file('section4_image1');
            $filename4= date('YmdHi').$section4_file1->getClientOriginalName();
            $section4_image1_path = $request->file('section4_image1')->store('home', 'public');
            $update_homeCms->section4_image1 = asset('storage/'.$section4_image1_path);
        }

        if ($request->hasFile('section4_image2')) {
            $request->validate([
                'section4_image2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section4_file2= $request->file('section4_image2');
            $filename5= date('YmdHi').$section4_file2->getClientOriginalName();
            $section4_image2_path = $request->file('section4_image2')->store('home', 'public');
            $update_homeCms->section4_image2 = asset('storage/'.$section4_image2_path);
        }
        
        if ($request->hasFile('section4_image3')) {
            $request->validate([
                'section4_image3' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section4_file3= $request->file('section4_image3');
            $filename6= date('YmdHi').$section4_file3->getClientOriginalName();
            $section4_image3_path = $request->file('section4_image3')->store('home', 'public');
            $update_homeCms->section4_image3 = asset('storage/'.$section4_image3_path);
        }

        if ($request->hasFile('section4_image4')) {
            $request->validate([
                'section4_image4' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section4_file4= $request->file('section4_image4');
            $filename7= date('YmdHi').$section4_file4->getClientOriginalName();
            $section4_image4_path = $request->file('section4_image4')->store('home', 'public');
            $update_homeCms->section4_image4 = asset('storage/'.$section4_image4_path);
        }

        $update_homeCms->section5_title = $request->section5_title;
        $update_homeCms->section5_1st_content = $request->section5_1st_content;
        $update_homeCms->section5_1st_content_details = $request->section5_1st_content_details;
        $update_homeCms->section5_2nd_content = $request->section5_2nd_content;
        $update_homeCms->section5_2nd_content_details = $request->section5_2nd_content_details;
        $update_homeCms->section5_3rd_content = $request->section5_3rd_content;
        $update_homeCms->section5_3rd_content_details = $request->section5_3rd_content_details;
        $update_homeCms->section5_4th_content = $request->section5_4th_content;
        $update_homeCms->section5_4th_content_details = $request->section5_4th_content_details;
        $update_homeCms->faq_section_title = $request->faq_section_title;
        $update_homeCms->faq_1st_question = $request->faq_1st_question;
        $update_homeCms->faq_1st_answer = $request->faq_1st_answer;
        $update_homeCms->faq_2nd_question = $request->faq_2nd_question;
        $update_homeCms->faq_2nd_answer = $request->faq_2nd_answer;
        $update_homeCms->faq_3rd_question = $request->faq_3rd_question;
        $update_homeCms->faq_3rd_answer = $request->faq_3rd_answer;
        $update_homeCms->faq_4th_question = $request->faq_4th_question;
        $update_homeCms->faq_4th_answer = $request->faq_4th_answer;
        $update_homeCms->section6_title = $request->section6_title;
        
        if ($request->hasFile('section6_image')) {
            $request->validate([
                'section6_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $section6_file= $request->file('section6_image');
            $filename8= date('YmdHi').$section6_file->getClientOriginalName();
            $section6_image_path = $request->file('section6_image')->store('home', 'public');
            $update_homeCms->section6_image = asset('storage/'.$section6_image_path);
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
        ]);
        
        $update_about = About::find($request->about_cms_id);
        $update_about->title = $request->title;
        $update_about->description = $request->description;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('about', 'public');
            $update_about->about_image = asset('storage/'.$image_path);
        }
        if ($request->hasFile('icon1')) {
            $request->validate([
                'icon1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file1= $request->file('icon1');
            $filename1= date('YmdHi').$file1->getClientOriginalName();
            $image_path1 = $request->file('icon1')->store('about', 'public');
            $update_about->icon1 = asset('storage/'.$image_path1);
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
            $update_about->icon2 = asset('storage/'.$image_path2);
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
            $update_about->icon3 = asset('storage/'.$image_path3);

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
            $update_about->icon4 = asset('storage/'.$image_path4);
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
            $update_about->icon5 = asset('storage/'.$image_path5);
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
            $update_about->icon6 = asset('storage/'.$image_path6);
        }
        $update_about->title6 = $request->title6;
        $update_about->details6 = $request->details6;
        $update_about->update();

        return back()->with('message','About Cms updated successfully');
    }
}
