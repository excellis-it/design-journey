<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurTeam;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $our_teams = OurTeam::orderBy('id','desc')->get();
        return view("admin.our-team.list")->with(compact('our_teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("admin.our-team.create");
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
            'designation' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:50000',
        ]);

        $our_team = new OurTeam();
        $our_team->name = $request->name;
        $our_team->designation = $request->designation;
        if ($request->hasFile('image')) {
            
            $our_team_file= $request->file('image');
            $filename= date('YmdHi').$our_team_file->getClientOriginalName();
            $team_image = $request->file('image')->store('team_member', 'public');
            $our_team->image = $team_image;
        }

        $our_team->save();

        return redirect()->route('our-teams.index')->with('message','Our Team Member Added Successfully');

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
        $our_team = OurTeam::find($id);
        return view('admin.our-team.edit', compact('our_team'));
    }

    public function updateOurTeam(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            
        ]);

        $our_team = OurTeam::find($request->id);
        $our_team->name = $request->name;
        $our_team->designation = $request->designation;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:50000',
            ]);
            
            $our_team_file= $request->file('image');
            $filename= date('YmdHi').$our_team_file->getClientOriginalName();
            $team_image = $request->file('image')->store('team_member', 'public');
            $our_team->image = $team_image;
        }
        $our_team->update();

        return redirect()->back()->with('message','Our Team Member Updated Successfully');
    }

    public function deleteOurTeam($id)
    {
        $our_team = OurTeam::find($id);
        $our_team->delete();
        return redirect()->back()->with('error','Our Team Member Deleted Successfully');
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
