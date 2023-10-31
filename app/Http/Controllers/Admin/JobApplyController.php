<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobApply;

class JobApplyController extends Controller
{
    //

    public function jobApplyList()
    {
        $job_apply_list = JobApply::orderBy('id','desc')->with('career')->get();
        return view('admin.job-apply.list',compact('job_apply_list'));
    }

    public function jobApplyDetails($id)
    {
        $job_apply_detail =  JobApply::where('id',$id)->with('career')->first();
        return view('admin.job-apply.detail',compact('job_apply_detail'));
    }

    public function downloadResume($id)
    {

        $file = JobApply::where('id', $id)->select('resume_upload')->first();

        if ($file) {
            // Construct the full file path on the server
            $filePath = public_path('storage/'.$file->resume_upload);
            

            if (file_exists($filePath)) {
                return response()->download($filePath);
            } else {
                return ['status' => 'The file does not exist'];
            }
        } else {
            return ['status' => 'File not found'];
        }

    }
}
