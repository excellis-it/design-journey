<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\PresentationForm;
use App\Models\SubType;
use Auth;

class RequestController extends Controller
{

    public function requestList(Request $request)
    {
        $user_requests = PresentationForm::where('user_id', Auth::user()->id)->orderBy('id','asc')->with('SubType')->get();
        return view('user.request.list',compact('user_requests'));
    }

    public function requestDetails($id)
    {
        $user_request = PresentationForm::where('id',$id)->with('SubType','Type')->first();
        return view('user.request.details',compact('user_request'));
    }
    
    public function createOrder()
    {
        $types = Type::orderBy('id','asc')->get();
        return view('user.order.create',compact('types'));
    }

    public function singleOrder($id)
    {
        $sub_types = SubType::where('type_id',$id)->get();
        return view('user.order.create1',compact('sub_types'));

    }

    public function formOrder($id)
    {
        return view('user.order.form',compact('id'));
    }

    public function submitPresentation(Request $request)
    {
       
        $request->validate([
            'request_name'     => 'required',
            'design_type' => 'required',
            'pages_number' => 'required',
            'size_format' => 'required',
        ]);

        $get_type_id = SubType::where('id',$request->sub_type_id)->first();

        $presentation = new PresentationForm();
        $presentation->user_id = auth()->user()->id;
        $presentation->type_id = $get_type_id->type_id;
        $presentation->sub_type_id = $request->sub_type_id;
        $presentation->request_name = $request->request_name;
        $presentation->brand_name = $request->brand_name;
        $presentation->design_type = $request->design_type;
        $presentation->pages_number = $request->pages_number;
        $presentation->size_format = $request->size_format;
        $presentation->copy_presentation = $request->copy_presentation;
        $presentation->custom_illustration = $request->custom_illustration;
        $presentation->additional_information = $request->additional_information;

        if ($request->hasFile('demo_design_file')) {
            $request->validate([
                'demo_design_file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('demo_design_file');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('demo_design_file')->store('presentation', 'public');
            $presentation->demo_design_file = asset('storage/'.$image_path);
        }


        $presentation->save();

        return back()->with('message','Your Presentation Form has been submitted successfully!');

    }
}
