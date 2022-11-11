<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Compliant;

class CompliantController extends Controller
{
    private $view = 'admin.compliant.';

    public function index()
    {
        $items = Compliant::all();
        return view($this->view . 'index', [
            'items' => $items
        ]);
    }

    public function show(Compliant $compliant)
    {
        return view($this->view . 'show', [
            'compliant' => $compliant
        ]);
    }
}
