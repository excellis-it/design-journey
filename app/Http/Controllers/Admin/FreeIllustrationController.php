<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IllustrationCategory;
use App\Models\IllustrationCategoryImage;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;



class FreeIllustrationController extends Controller
{
    use ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $free_illustrations = IllustrationCategory::orderBy('id', 'desc')->get();
        return view('admin.illustrations.index', compact('free_illustrations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.illustrations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'illustration_category' => 'required',
            'category_slug' => 'required',
        ]);
        $illustration_category = new IllustrationCategory;
        $illustration_category->category_name = $request->illustration_category;
        $illustration_category->category_slug = $request->category_slug;
        $illustration_category->save();

        return redirect()->route('free-illustrations.index')->with('message', 'Free Illustration Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
            $illustration_category = IllustrationCategory::find($id);
            return view('admin.illustrations.edit', compact('illustration_category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function updateIllustration(Request $request)
    {
        $request->validate([
            'illustration_category' => 'required',
            'category_slug' => 'required',
        ]);
        $illustration_category = IllustrationCategory::find($request->id);
        $illustration_category->category_name = $request->illustration_category;
        $illustration_category->category_slug = $request->category_slug;
        $illustration_category->update();

        return redirect()->route('free-illustrations.index')->with('message', 'Free Illustration Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteIllustration($id)
    {
        $illustration_category = IllustrationCategory::find($id);
        $illustration_category->delete();
        return redirect()->route('free-illustrations.index')->with('error', 'Free Illustration Category Deleted Successfully');
    }

    public function illustrationImages()
    {
        $illustration_images = IllustrationCategoryImage::orderBy('id', 'desc')->get();
        // dd( $illustration_images);
        return view('admin.illustrations.images.index', compact('illustration_images'));
    }

    public function createIllustrationImage()
    {
        $illustration_categories = IllustrationCategory::orderBy('id', 'desc')->get();
        return view('admin.illustrations.images.create', compact('illustration_categories'));
    }

    public function storeIllustrationImage(Request $request)
    {
        // return $request;
        $request->validate([
            'illustration_category' => 'required',
            'style_type' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $validator = Validator::make($request->all(), [
                'image' => 'required',
                'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
            ]);
            foreach ($request->file('image') as $key => $image) {
                $illustration_image = new IllustrationCategoryImage();
                $illustration_image->illustration_category_id = $request->illustration_category;
                $illustration_image->style_type = $request->style_type;
                // $data->profile_picture = $this->imageUpload($request->file('profile_picture'), 'patient');
                $illustration_image->images = $this->imageUpload($request->file('image')[$key], 'illustration')['filePath'];
                // dd($illustration_image->images['filePath']);
                $illustration_image->imgage_name = $request->image_name[$key];
                $illustration_image->save();
            }
        }

        return redirect()->route('free-illustrations.images.list')->with('message', 'Free Illustration Image Added Successfully');
    }

    public function editIllustrationImage($id)
    {

        $illustration_image = IllustrationCategoryImage::where('illustration_category_id',$id)->get();
        $illustration_categories = IllustrationCategory::orderBy('id', 'desc')->get();
        return view('admin.illustrations.images.edit', compact('illustration_image','illustration_categories'));

    }

    public function deleteIllustrationImage($id)
    {
        $illustration_image = IllustrationCategoryImage::where('id',$id)->delete();

        return redirect()->route('free-illustrations.images.list')->with('error', 'Free Illustration Image Deleted Successfully');
    }

    public function updateIllustrationImage()
    {
        $request->validate([
            'illustration_category' => 'required',
            'style_type' => 'required',
        ]);
        $illustration_category = IllustrationCategory::find($request->id);
        $illustration_category->category_name = $request->illustration_category;
        $illustration_category->category_slug = $request->category_slug;
        $illustration_category->update();

        return redirect()->route('free-illustrations.index')->with('message', 'Free Illustration Category Updated Successfully');
    }

}
