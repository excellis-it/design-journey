<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Invoice;
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
       return $users = User::orderBy('id', 'desc')->hasRole('CUSTOMER')->get();
        return view('admin.customer.list', compact('users'));

      
    }

    public function userStatusChange(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success'=>'Status change successfully.']);
    }
}
