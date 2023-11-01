<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //

    public function index()
    {
        return view('user.profile');
    }

    public function profileUpdate(Request $request)
    {
        // dd($request->all());
        
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix|unique:users,email,'.Auth::user()->id,  
        ]);

        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $image_path = $request->file('image')->store('users', 'public');
            $data->image = $image_path;
        }
        if($request->password){
            $data->password = bcrypt($request->password);
        }
       
        $data->save();
        return redirect()->back()->with('message', 'Profile updated successfully.');
    }



    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


}
