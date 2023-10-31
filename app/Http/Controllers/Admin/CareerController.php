<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;


class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $careers = Career::orderBy('id','desc')->get();
        return view('admin.career.list',compact('careers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.career.create');
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
            'career_name' => 'required|string|max:250',
            'location' => 'required|string|max:250',
            'work_type' => 'required|string|max:250',
            'job_type' => 'required|string|max:250',
            'details' => 'required',
        ]);
        $store_career = new Career();
        $store_career->career_name = $request->career_name;
        $store_career->location = $request->location;
        $store_career->work_type = $request->work_type;
        $store_career->job_type = $request->job_type;
        $store_career->details = $request->details;
        $store_career->save();

        return redirect()->route('careers.index')->with('message','Career added successfully');
    }

    public function editCareer($id)
    {
        $career = Career::find($id);
        return view('admin.career.edit',compact('career'));
    }

    public function updateCareer(Request $request)
    {
        $request->validate([
            'career_name' => 'required|string|max:250',
            'location' => 'required|string|max:250',
            'work_type' => 'required|string|max:250',
            'job_type' => 'required|string|max:250',
            'details' => 'required',
        ]);
        $career = Career::find($request->id);
        $career->career_name = $request->career_name;
        $career->location = $request->location;
        $career->work_type = $request->work_type;
        $career->job_type = $request->job_type;
        $career->details = $request->details;
        $career->update();

        return redirect()->route('careers.index')->with('message','Career updated successfully');
    }


    public function deleteCareer($id)
    {
        $career = Career::find($id);
        $career->delete();
        return redirect()->route('careers.index')->with('error','Career deleted successfully');
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
