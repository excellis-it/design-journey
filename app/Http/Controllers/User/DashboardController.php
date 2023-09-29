<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invoice;

class DashboardController extends Controller
{
    //
    
    public function dashboard()
    {
       
        return view('user.dashboard');
    }
}
