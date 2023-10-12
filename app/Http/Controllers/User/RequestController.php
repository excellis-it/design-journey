<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\SubType;

class RequestController extends Controller
{
    
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
        return view('user.order.form');
    }
}
