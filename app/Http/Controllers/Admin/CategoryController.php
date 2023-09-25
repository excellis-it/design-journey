<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryImage;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        return view('admin.category.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return  view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->status = $request->status;
        $category->save();

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $name = $image->getClientOriginalName();
                $image_path = $image->store('categories', 'public');
                $category_image = new CategoryImage();
                $category_image->category_id = $category->id;
                $category_image->image = asset('storage/'.$image_path);
                $category_image->save();
            }
        }

        return redirect()->route('categories.index')->with('message', 'Category created successfully.');

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
        $category = Category::with('categoryImages')->find($id);
        return view('admin.category.edit', compact('category'));
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

    public function deleteCategoryImage($id)
    {
        $category_image = CategoryImage::find($id);
        $category_image->delete();
        return redirect()->back()->with('message', 'Category image deleted successfully.');
    }

    public function deleteCategory($id)
    {
        Category::findOrFail($id)->delete();
        return back()->with('error', 'Category has been deleted!');
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



    public function changeCategoryStatus(Request $request)
    {
        $category = Category::find($request->cat_id);
        $category->status = $request->status;
        $category->save();
        return response()->json(['message' => 'Status change successfully.']);
    }

    public function updateCategory(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->status = $request->status;
        $category->save();

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $name = $image->getClientOriginalName();
                $image_path = $image->store('categories', 'public');
                $category_image = new CategoryImage();
                $category_image->category_id = $category->id;
                $category_image->image = asset('storage/'.$image_path);
                $category_image->save();
            }
        }


        return redirect()->back()->with('message', 'Category updated successfully.');
    }

    
}
