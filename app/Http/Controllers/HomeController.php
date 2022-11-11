<?php

namespace App\Http\Controllers;

use App\Models\VolEntity;

class HomeController extends Controller
{
    public function index()
    {
        $items = VolEntity::where('VOL_ENTITY_STATUS', 1)->get();
        return view('website.vol_entity.list', [
            'items' => $items
        ]);
    }
}
