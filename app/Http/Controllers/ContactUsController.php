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
}
