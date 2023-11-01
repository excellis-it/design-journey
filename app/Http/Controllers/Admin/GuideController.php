<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guide;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $guides = Guide::orderBy('id','desc')->get();
        return view('admin.guide.list',compact('guides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.guide.create');
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
            'title' => 'required|string|max:250',
            'small_description' => 'required',
            'whats_inside' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:50000',
        ]);
        $guide_store = new Guide();
        $guide_store->title = $request->title;
        $guide_store->small_description = $request->small_description;
        $guide_store->whats_inside = $request->whats_inside;
        if ($request->hasFile('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('guides', 'public');
            $guide_store->image = $image_path;
        }
        $guide_store->save();


        return redirect()->back()->with('message','Guide created successfully!');
    }

    public function deleteGuide($id)

    {
        $guide = Guide::find($id);
        $guide->delete();

        return redirect()->back()->with('error','Guide deleted successfully!');
    }

    public function editGuide($id)
    {
        $guide = Guide::find($id);
        return view('admin.guide.edit',compact('guide'));
    }

    public function updateGuide(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:250',
            'small_description' => 'required',
            'whats_inside' => 'required',
        ]);
        $update_guide = Guide::find($request->id);
        $update_guide->title = $request->title;
        $update_guide->small_description = $request->small_description;
        $update_guide->whats_inside = $request->whats_inside;
        if ($request->hasFile('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('guides', 'public');
            $update_guide->image = $image_path;
        }
        $update_guide->update();

        return redirect()->back()->with('message','Guide updated successfully!');
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
