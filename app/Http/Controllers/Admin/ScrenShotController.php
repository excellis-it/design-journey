<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScreenShot;

class ScrenShotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $screenshots = ScreenShot::orderBy('id', 'desc')->get();
        return view('admin.screenshot.list')->with(compact('screenshots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.screenshot.create');
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
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:50000',
            ]);
            $type = new ScreenShot();
            
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('screenshot', 'public');
            $type->image = asset('storage/'.$image_path);
            $type->save();
            return redirect()->route('screenshot.index')->with('message', 'Screenshot added successfully');
            
    }

    public function editScreenShots($id)
    {
        $screenshots = ScreenShot::find($id);
        return view('admin.screenshot.edit')->with(compact('screenshots'));
    }

    public function screenShotsUpdate(Request $request)
    {
         
         $update_screenshot = ScreenShot::find($request->id);
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file2= $request->file('image');
            $filename2= date('YmdHi').$file2->getClientOriginalName();
            $image_path2 = $request->file('image')->store('screenshot', 'public');
            $update_screenshot->image = asset('storage/'.$image_path2);
        }
        $update_screenshot->update();

        return redirect()->route('screenshot.index')->with('message', 'Screenshot updated successfully');
    }

    public function deleteScreenShots($id)
    {
        $screenshots = ScreenShot::find($id);
        $screenshots->delete();
        return redirect()->route('screenshot.index')->with('message', 'Screenshot deleted successfully');
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
