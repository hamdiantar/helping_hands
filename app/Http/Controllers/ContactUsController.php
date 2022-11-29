<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class contactUsController extends Controller
{
    public function getContactUsForm()
    {
        return view('website.contactus');
    }

    public function contactus(Request $request)
    {
        ContactUs::create($request->all());
        return redirect()->back()->with('success', 'Your Message Has Been Sent Successfully');
    }
}
