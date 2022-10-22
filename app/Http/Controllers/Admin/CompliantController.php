<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CompliantController extends Controller
{
    private $view = 'admin.compliant.';

    public function index()
    {
        notify()->smiley('success', 'Item has been created successfully');
        return view($this->view . 'index');
    }
}
