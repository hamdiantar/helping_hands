<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class VolunteerController extends Controller
{
    private $view = 'admin.volunteers.';

    public function index()
    {
        $items = User::all();
        return view($this->view.'index', compact('items'));
    }

    public function show(int $userId)
    {
        $item = User::findOrFail($userId);
        return view($this->view.'show', compact('item'));
    }
}
