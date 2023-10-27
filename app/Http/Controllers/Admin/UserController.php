<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\ContactUs;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function list(Request $request)
    {
        return view('admin.customer.list');
    }

    public function userList(Request $request)
    {
        $users = User::orderBy('id', 'desc')->role('CUSTOMER')->get();
        return view('admin.customer.list', compact('users'));

      
    }

    public function changeUserStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success'=>'Status change successfully.']);
    }

    public function contactUsList()
    {
        $contact_us = ContactUs::orderBy('id', 'desc')->get();
        return view('admin.contact-us.list', compact('contact_us'));
    }

    public function deleteUser($id)
    {
        
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->json(['success'=>'User delete successfully.']);
    }
}
