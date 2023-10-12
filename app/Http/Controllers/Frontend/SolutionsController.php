<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Solution;
use App\Models\SolutionCms;
use App\Models\HomeCms;
use App\Models\Category;
use App\Models\CategoryImage;


class SolutionsController extends Controller
{
    //

    public function socialMediaDesign()
    {
        $solution = Solution::first();
        $solutionCms = SolutionCms::first();
        $home_content = HomeCms::first();
        $get_solution = Category::where('slug', 'social-media-design')->first();
        $solution_images = CategoryImage::where('category_id', $get_solution->id)->get();
        return view('frontend.solution.social-media-design',compact('solution','solutionCms','home_content','solution_images'));
    }

    public function websiteDesign()
    {
        $solution = Solution::first();
        $solutionCms = SolutionCms::first();
        $home_content = HomeCms::first();
        $get_solution = Category::where('slug', 'websites')->first();
        $solution_images = CategoryImage::where('category_id', $get_solution->id)->get();
        return view('frontend.solution.website-design',compact('solution','solutionCms','home_content','solution_images'));
    }

    public function illustrationDesign()
    {
        $solution = Solution::first();
        $solutionCms = SolutionCms::first();
        $home_content = HomeCms::first();
        $get_solution = Category::where('slug', 'illustrations')->first();
        $solution_images = CategoryImage::where('category_id', $get_solution->id)->get();
        return view('frontend.solution.illustration-design',compact('solution','solutionCms','home_content','solution_images'));
    }

    public function presentationDesign()
    {
        $solution = Solution::first();
        $solutionCms = SolutionCms::first();
        $home_content = HomeCms::first();
        $get_solution = Category::where('slug', 'presentations')->first();
        $solution_images = CategoryImage::where('category_id', $get_solution->id)->get();
        return view('frontend.solution.presentation-design',compact('solution','solutionCms','home_content','solution_images'));
    }
}
