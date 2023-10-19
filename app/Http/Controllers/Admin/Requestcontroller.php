<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PresentationForm;
use App\Models\SubType;
use App\Models\UploadFile;
use Auth;

class Requestcontroller extends Controller
{
    //

    public function requestList()
    {
        $requests = PresentationForm::orderBy('id','desc')->with('Type','User')->get();
        return view('admin.request.list',compact('requests'));
    }

    public function changeRequestStatus(Request $request)
    {
        $status_change = PresentationForm::where('id',$request->id)->update(['status'=>$request->status]);
       
        return response()->json(['status'=>true,'message'=>'Status Updated Successfully']);
    }

    public function userRequestDetails($id)
    {
        $request_details = PresentationForm::where('id',$id)->with('Type','Subtype','User')->first();
        return view('admin.request.details',compact('request_details'));
    }

    public function requestFileUpdate(Request $request)
    {
        $request->validate([
            
            'upload_zip' => 'required|mimes:zip', // Validate that it's a zip file
        ]);
    
        if ($request->hasFile('upload_zip')) {
            $zipFile = $request->file('upload_zip');
            $filename1= date('YmdHi').$file1->getClientOriginalName();
            $image1_path = $request->file('upload_zip')->store('uploads', 'public');
            
            $uploadedFile = new UploadFile();
            $uploadedFile->user_id = $request->user_id;
            $uploadedFile->request_id = $request->request_id;
            $uploadedFile->file_name = asset('storage/'.$image1_path);
            $uploadedFile->file_description = $request->description;
            $uploadedFile->save();   
        }


        return redirect()->back()->with('message','File uploaded successfully');

    }
}
