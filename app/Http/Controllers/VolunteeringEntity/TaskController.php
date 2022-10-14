<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    private $view = 'volunteering-entity.tasks.';

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
