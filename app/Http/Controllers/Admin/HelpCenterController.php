<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HelpCenter;

class HelpCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $help_centers = HelpCenter::orderBy('id','desc')->get();
        return view('admin.help-center.list',compact('help_centers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.help-center.create');
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
            'title' => 'required',
            'details' => 'required',
        ]);

        $help_center = new HelpCenter();
        $help_center->name = $request->name;
        $help_center->title = $request->title;
        $help_center->details = $request->details;
        $help_center->save();

        return redirect()->back()->with('message','Help Center added successfully');

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

    public function editHelpCenter($id)
    {
        //
        $help_center = HelpCenter::find($id);
        return view('admin.help-center.edit',compact('help_center'));
    }

    public function updateHelpCenter(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'details' => 'required',
        ]);
        $update_help_center = HelpCenter::find($request->id);
        $update_help_center->name = $request->name;
        $update_help_center->title = $request->title;
        $update_help_center->details = $request->details;
        $update_help_center->update();

        return redirect()->back()->with('message','Help Center updated successfully');
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

    public function deleteHelpCenter($id)
    {
        //
        $help_center = HelpCenter::find($id);
        $help_center->delete();
        return redirect()->back()->with('error','Help Center deleted successfully');
    }
}
