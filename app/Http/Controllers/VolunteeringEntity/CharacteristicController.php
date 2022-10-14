<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;

class CharacteristicController extends Controller
{
    private $view = 'volunteering-entity.characteristic.';

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

    public function show()
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
