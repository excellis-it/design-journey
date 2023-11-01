<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IllustrationCategory;
use App\Models\IllustrationCategoryImage;
use App\Models\Guide;
use App\Models\IconCategory;
use App\Models\IconCategoryImage;
use App\Models\CaseStudy;
use Illuminate\Support\Facades\Storage;

class ResourcesController extends Controller
{
    //

    public function freeIllustration()
    {
        $illustration_categories = IllustrationCategory::orderBy('id', 'desc')->get();

        $illustrations = IllustrationCategoryImage::orderBy('id', 'desc')->get();
        return view('frontend.resources.free-illustration', compact('illustration_categories', 'illustrations'));
    }

    public function filter(Request $request)
    {
        // return $request->all();
        // Retrieve filters and search criteria from the request
        $category = $request->input('category');
        $style = $request->input('style');
        $search = $request->input('search');

        // Query the database based on filters and search criteria
        $query = IllustrationCategoryImage::query();

        if (!empty($category)) {
            $query->whereIn('illustration_category_id', $category);
        }

        if (!empty($style)) {
            $query->whereIn('style_type', $style);
        }

        if (!empty($search)) {
            $query->where('imgage_name', 'like', '%' . $search . '%');
        }

        // Apply pagination
        $illustrations = $query->get();

        return view('frontend.resources.illustration-filter', compact('illustrations'))->render();
    }



    public function downloadIllustration(Request $request)
    {
        $illustration = IllustrationCategoryImage::find($request->id);

        if ($illustration->images) {
            // Construct the full file path on the server
            $filePath = public_path('storage/' . $illustration->images);


            if (file_exists($filePath)) {
                return response()->download($filePath);
            } else {
                return ['status' => 'The file does not exist'];
            }
        } else {
            return ['status' => 'File not found'];
        }
    }

    public function iconFilter(Request $request)
    {
        // return $request->all();
        // Retrieve filters and search criteria from the request
        $category = $request->input('category');
        $style = $request->input('style');
        $search = $request->input('search');

        // Query the database based on filters and search criteria
        $query = IconCategoryImage::query();

        if (!empty($category)) {
            $query->whereIn('icon_category_id', $category);
        }

        if (!empty($style)) {
            $query->whereIn('style_type', $style);
        }

        if (!empty($search)) {
            $query->where('image_name', 'like', '%' . $search . '%');
        }

        // Apply pagination
        $icons = $query->get();

        return view('frontend.resources.icon-filter', compact('icons'))->render();
    }

    public function downloadIcon(Request $request)
    {
        $icon = IconCategoryImage::find($request->id);

        if ($icon->images) {
            // Construct the full file path on the server
            $filePath = public_path('storage/' . $icon->images);


            if (file_exists($filePath)) {
                return response()->download($filePath);
            } else {
                return ['status' => 'The file does not exist'];
            }
        } else {
            return ['status' => 'File not found'];
        }
    }


    public function freeIcon()
    {
        $icon_categories = IconCategory::orderBy('id', 'desc')->get();
        $icons = IconCategoryImage::orderBy('id', 'desc')->get();
        return view('frontend.resources.free-icon')->with(compact('icon_categories', 'icons'));
    }

    public function guides()
    {
        $guides = Guide::orderBy('id', 'desc')->get();
        return view('frontend.resources.guides', compact('guides'));
    }

    public function casestudies()
    {
        $case_studies = CaseStudy::orderBy('id','desc')->get();
        return view('frontend.resources.case-studies')->with(compact('case_studies'));
    }
}
