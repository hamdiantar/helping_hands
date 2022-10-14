<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;

class opportunityController extends Controller
{
    private $view = 'volunteering-entity.opportunities.';

    public function index()
    {
//        notify()->smiley('success', 'Item has been created successfully');
        return view($this->view.'index');
    }

    public function create()
    {
        return view($this->view.'create');
    }
    public function show()
    {
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
