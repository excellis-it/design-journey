<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use App\Models\PresentationForm;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count['categories'] = Category::count();
        $count['customer_registrations'] = User::role('CUSTOMER')->count();
        $count['total_request'] = PresentationForm::count();
        
        return view('admin.dashboard',compact('count'));
    }

}
