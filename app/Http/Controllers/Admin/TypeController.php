<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\SubType;


class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $types = Type::orderBy('id','desc')->get();
        return view('admin.type.list', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.type.create');
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
        $type = new Type();
        $type->name = $request->name;
        $type->slug = $request->slug;
        $type->details = $request->details;

        if ($request->hasFile('icon')) {
            $request->validate([
                'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('icon');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('icon')->store('type', 'public');
            $type->logo = asset('storage/'.$image_path);
        }

        $type->save();
        return redirect()->back()->with('message', 'Type added successfully');
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
        $type_detail = Type::find($id);
        return view('admin.type.edit', compact('type_detail'));
    }

    public function typeUpdate(Request $request)
    {
        $type = Type::find($request->id);
        $type->name = $request->name;
        $type->slug = $request->slug;
        $type->details = $request->details;

        if ($request->hasFile('icon')) {
            $request->validate([
                'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('icon');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('icon')->store('type', 'public');
            $type->logo = asset('storage/'.$image_path);
        }

        $type->save();
        return redirect()->back()->with('message', 'Type updated successfully');
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

        return $request;
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

    public function deleteType($id)
    {
        $type = Type::find($id);
        $type->delete();
        return redirect()->back()->with('error', 'Type deleted successfully');
    }

    public function subTypeList()
    {
        $subtypes = SubType::orderBy('id','desc')->with('Type')->get();
        return view('admin.type.subtype.list',compact('subtypes'));
    }

    public function createSubType()
    {
        $types = Type::orderBy('id','desc')->get();
        return view('admin.type.subtype.create',compact('types'));
    }

    public function storeSubType(Request $request)
    {
        $request->validate([
            'type_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'details' => 'required',
        ]);
        $sub_type = new SubType();
        $sub_type->type_id = $request->type_id;
        $sub_type->name = $request->name;
        $sub_type->slug = $request->slug;
        $sub_type->details = $request->details;  
        if ($request->hasFile('icon')) {
            $request->validate([
                'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('icon');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('icon')->store('subtype', 'public');
            $sub_type->icon = asset('storage/'.$image_path);
        }
        $sub_type->save();

        return redirect()->back()->with('message', 'Sub Type added successfully');
    }

    public function editSubType($id)
    {
        $sub_type = SubType::find($id);
        $types = Type::orderBy('id','desc')->get();
        return view('admin.type.subtype.edit',compact('sub_type','types'));
    }

    public function updateSubType(Request $request)
    {
        $request->validate([
            'type_id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'details' => 'required',
        ]);
        $sub_type = SubType::find($request->id);
        $sub_type->type_id = $request->type_id;
        $sub_type->name = $request->name;
        $sub_type->slug = $request->slug;
        $sub_type->details = $request->details;  
        if ($request->hasFile('icon')) {
            $request->validate([
                'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('icon');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('icon')->store('subtype', 'public');
            $sub_type->icon = asset('storage/'.$image_path);
        }
        $sub_type->update();

        return redirect()->back()->with('message', 'Sub Type updated successfully');
    }

    public function deleteSubType($id)
    {
        $sub_type = SubType::find($id);
        $sub_type->delete();
        return redirect()->back()->with('error', 'Sub Type deleted successfully');
    }
}
