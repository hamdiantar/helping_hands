<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class VolunteeringEntityController extends Controller
{
    private $view = 'admin.volunteering-entity.';

    public function index()
    {
//        notify()->smiley('success', 'Item has been created successfully');
        return view($this->view.'index');
    }

    public function create()
    {
        return view($this->view.'create');
    }

    public function store()
    {
    }

    public function edit()
    {
//        dd('ddddd');
        return view($this->view.'edit');
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
