<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FooterCms;

class FooterCmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $footer_cms = FooterCms::orderBy('id','desc')->get();
        return view('admin.cms.footer_cms.list',compact('footer_cms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cms.footer_cms.create');
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
            'social_icon' => 'required',
            'social_link' => 'required',
        ]);

        $footer_cms = new FooterCms();
        $footer_cms->social_icon = $request->social_icon;
        $footer_cms->social_link = $request->social_link;
        $footer_cms->save();

        return redirect()->route('footer-cms.index')->with('message','Social link add successfully');

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
        $footer_cms = FooterCms::find($id);
        return view('admin.cms.footer_cms.edit',compact('footer_cms'));
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

    public function updateFooterCms(Request $request)
    {
        $request->validate([
            'social_icon' => 'required',
            'social_link' => 'required',
        ]);

        $footer_cms = FooterCms::find($request->id);
        $footer_cms->social_icon = $request->social_icon;
        $footer_cms->social_link = $request->social_link;
        $footer_cms->save();

        return redirect()->route('footer-cms.index')->with('message','Social link update successfully');
    }

    public function deleteFooterCms($id)
    {
        $footer_cms = FooterCms::find($id);
        $footer_cms->delete();
        return redirect()->route('footer-cms.index')->with('message','Social link delete successfully');
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
