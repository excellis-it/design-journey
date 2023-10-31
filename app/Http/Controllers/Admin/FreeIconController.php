<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IconCategory;
use App\Models\IconCategoryImage;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FreeIconController extends Controller
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
        $icons = IconCategory::orderBy('id', 'desc')->get();
        return view('admin.icons.index', compact('icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.icons.create');
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
            'icon_category' => 'required',
            'category_slug' => 'required',
        ]);
        $icon_category = new IconCategory;
        $icon_category->category_name = $request->icon_category;
        $icon_category->category_slug = $request->category_slug;
        $icon_category->save();

        return redirect()->route('icons.index')->with('message', 'Free Icon Category Added Successfully');
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
        $icon_category = IconCategory::find($id);
        return view('admin.icons.edit', compact('icon_category'));
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

    public function updateIcon(Request $request)
    {
        $request->validate([
            'icon_category' => 'required',
            'category_slug' => 'required',
        ]);
        $icon_category = IconCategory::find($request->id);
        $icon_category->category_name = $request->icon_category;
        $icon_category->category_slug = $request->category_slug;
        $icon_category->update();

        return redirect()->route('icons.index')->with('message', 'Free Icon Category Updated Successfully');
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

    public function deleteIcon($id)
    {
        $icon_category = IconCategory::findOrFail($id);
        $icon_category->delete();
        return redirect()->route('icons.index')->with('error', 'Free Icon Category Deleted Successfully');
    }

    public function iconImages()
    {
        $icon_images = IconCategoryImage::orderBy('id', 'desc')->get();
        // dd( $icon_images);
        return view('admin.icons.images.index', compact('icon_images'));
    }

    public function createIconImage()
    {
        $icon_categories = IconCategory::orderBy('id', 'desc')->get();
        return view('admin.icons.images.create', compact('icon_categories'));
    }

    public function storeIconImage(Request $request)
    {
        // return $request;
        $request->validate([
            'icon_category' => 'required',
            'style_type' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $validator = Validator::make($request->all(), [
                'image' => 'required',
                'image.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
            ]);
            foreach ($request->file('image') as $key => $image) {
                $icon_image = new IconCategoryImage();
                $icon_image->icon_category_id  = $request->icon_category;
                $icon_image->style_type = $request->style_type;
                // $data->profile_picture = $this->imageUpload($request->file('profile_picture'), 'patient');
                $icon_image->images = $this->imageUpload($request->file('image')[$key], 'icon')['filePath'];
                // dd($icon_image->images['filePath']);
                $icon_image->image_name = $request->image_name[$key];
                $icon_image->save();
            }
        }

        return redirect()->route('icons.images.list')->with('message', 'Free Icon Image Added Successfully');
    }

    public function editIconImage($id)
    {

        $icon_image = IconCategoryImage::where('icon_category_id ', $id)->get();
        $icon_categories = IconCategory::orderBy('id', 'desc')->get();
        return view('admin.icons.images.edit', compact('icon_image', 'icon_categories'));
    }

    public function deleteIconImage($id)
    {
        $icon_image = IconCategoryImage::where('id', $id)->delete();

        return redirect()->route('icons.images.list')->with('error', 'Free Icon Image Deleted Successfully');
    }

    public function updateIconImage(Request $request)
    {
        $request->validate([
            'icon_category' => 'required',
            'style_type' => 'required',
        ]);
        $icon_category = IconCategory::find($request->id);
        $icon_category->category_name = $request->icon_category;
        $icon_category->category_slug = $request->category_slug;
        $icon_category->update();

        return redirect()->route('icons.index')->with('message', 'Free Icon Category Updated Successfully');
    }
}
