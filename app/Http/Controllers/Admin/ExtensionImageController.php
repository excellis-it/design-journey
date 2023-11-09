<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExtensionImage;
use Illuminate\Support\Facades\Storage;

class ExtensionImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extension_images = ExtensionImage::orderBy('id','desc')->get();
        return view('admin.extension_image.list',compact('extension_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.extension_image.create');
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
            'extension' => 'required|max:255',
            'name' => 'required|max:255',
            'image' => 'required|max:50000',
        ]);

        $extension_image = new ExtensionImage();
        $extension_image->extension = $request->extension;
        $extension_image->name = $request->name;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('extension', 'public');
            $extension_image->image = $image_path;
        }
        $extension_image->save();

        return back()->with('success','Extension Image Created Successfully');

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
        
        $edit_extension = ExtensionImage::find($id);
        return view('admin.extension_image.edit',compact('edit_extension'));
    }

    public function updateExtensionImage(Request $request)
    {
       
        $request->validate([
            'extension' => 'required|max:255|unique:extension_images,extension,'.$request->extension_id.',id',
            'name' => 'required|max:255',
        ]);

        $extension_image = ExtensionImage::find($request->extension_id);
        $extension_image->extension = $request->extension;
        $extension_image->name = $request->name;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|max:50000',
            ]);
            $file = $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('extension', 'public');
            $extension_image->image = $image_path;
        }
        $extension_image->update();

        return back()->with('message','Extension Updated Successfully');
    }

    public function deleteExtensionImage($id)
    {
        $extension_image = ExtensionImage::find($id);
        Storage::delete($extension_image->image);
        $extension_image->delete();
        return redirect()->back()->with('error','Extension Image Deleted Successfully');
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
}
