<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaseStudy;

class CaseStudiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $case_studies = CaseStudy::orderBy('id','desc')->get();
        return view('admin.case-studies.list',compact('case_studies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.case-studies.create');
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
            'title' => 'required|string|max:100',
            'video_link' => 'required|string|unique:categories|max:255',
            'description' => 'required',
            'company_small_details' => 'required',
            'company_type' => 'required',
            'company_size' => 'required',
            'company_location' => 'required',
            'main_image' => 'required',
        ]);

        $case_study = new CaseStudy();
        $case_study->title = $request->title;
        $case_study->video_link = $request->video_link;
        $case_study->description = $request->description;
        $case_study->company_small_details = $request->company_small_details;
        $case_study->company_type = $request->company_type;
        $case_study->company_size = $request->company_size;
        $case_study->company_location = $request->company_location;
        if ($request->hasFile('main_image')) {
            $file= $request->file('main_image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('main_image')->store('case_study', 'public');
            $case_study->main_image = asset('storage/'.$image_path);
        }

        if ($request->hasFile('image1')) {
            $file1= $request->file('image1');
            $filename1= date('YmdHi').$file1->getClientOriginalName();
            $image_path1 = $request->file('image1')->store('case_study', 'public');
            $case_study->image1 = asset('storage/'.$image_path1);
        }

        if ($request->hasFile('image2')) {
            $file2= $request->file('image2');
            $filename2= date('YmdHi').$file2->getClientOriginalName();
            $image_path2 = $request->file('image2')->store('case_study', 'public');
            $case_study->image2 = asset('storage/'.$image_path2);
        }

        if ($request->hasFile('image3')) {
            $file3= $request->file('image3');
            $filename3= date('YmdHi').$file3->getClientOriginalName();
            $image_path3 = $request->file('image3')->store('case_study', 'public');
            $case_study->image3 = asset('storage/'.$image_path3);
        }

        if ($request->hasFile('image4')) {
            $file4= $request->file('image4');
            $filename4= date('YmdHi').$file4->getClientOriginalName();
            $image_path3 = $request->file('image4')->store('case_study', 'public');
            $case_study->image4 = asset('storage/'.$image_path4);
        }

        $case_study->save();

        return redirect()->back()->with('message','Case Study created successfully!');

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
        return $id;
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
