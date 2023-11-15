<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BrandProfile;
use Auth;

class BrandProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand_profile = BrandProfile::where('user_id', Auth::user()->id)->get();
        return view('user.brand_profile.index', compact('brand_profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'brand_name'     => 'required',
        ]);

        $brand_profile = new BrandProfile();
        $brand_profile->user_id = Auth::user()->id;
        $brand_profile->brand_name = $request->brand_name;
        $brand_profile->brand_description = $request->brand_description;
        $brand_profile->save();

        return redirect()->route('edit.brand-profile', ['id' => $brand_profile->id]);
    }

    public function editBrandProfile($id)
    {
        $brand_profile = BrandProfile::where('id',$id)->first();
        return view('user.brand_profile.edit', compact('brand_profile'));
    }

    public function updateBrandProfile(Request $request)
    {
        $brand_profile = BrandProfile::where('id',$request->id)->first();
        $brand_profile->brand_colour = $request->color;
        if ($request->hasFile('logo_file')) {
            $request->validate([
                'logo_file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('logo_file');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('logo_file')->store('brand', 'public');
            $brand_profile->brand_logo = $image_path;
        }

        if ($request->hasFile('brand_guide_file')) {
            $request->validate([
                'brand_guide_file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file1= $request->file('brand_guide_file');
            $filename1= date('YmdHi').$file1->getClientOriginalName();
            $image_path1 = $request->file('brand_guide_file')->store('brand', 'public');
            $brand_profile->brand_guide = $image_path1;
        }

        if ($request->hasFile('font_file')) {
            $request->validate([
                'font_file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file2= $request->file('font_file');
            $filename2= date('YmdHi').$file2->getClientOriginalName();
            $image_path2 = $request->file('font_file')->store('brand', 'public');
            $brand_profile->font = $image_path2;
        }

        if ($request->hasFile('extra_assets_file')) {
            $request->validate([
                'extra_assets_file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file3= $request->file('extra_assets_file');
            $filename3= date('YmdHi').$file3->getClientOriginalName();
            $image_path3 = $request->file('extra_assets_file')->store('brand', 'public');
            $brand_profile->extra_asset = $image_path3;
        }

        $brand_profile->update();

        return redirect()->route('brand-profile.index')->with('message', 'Brand Profile updated successfully.');
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
        
    }

    public function deleteBrandProfile($id)
    {
        $delete_brand = BrandProfile::where('id',$id)->where('user_id',Auth::user()->id)->delete();
        return redirect()->back()->with('message', 'Brand Profile deleted successfully.');
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
