<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeCms;


class HomeCmsController extends Controller
{
    //

    public function homeCms()
    {
        $homeCms = HomeCms::first();
        return view('admin.cms.homeCms',compact('homeCms'));
    }

    public function homeCmsUpdate()
    {

    }
}
