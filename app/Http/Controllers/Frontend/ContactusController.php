<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;


class ContactusController extends Controller
{
    //

    public function contactUsSubmit(Request $request)
    {
        $contact_us = new ContactUs();
        $contact_us->full_name = $request->full_name;
        $contact_us->email = $request->email;
        $contact_us->message = $request->message;
        $contact_us->save();

        return redirect()->back()->with('message', 'Your message has been sent successfully');

    }
}
