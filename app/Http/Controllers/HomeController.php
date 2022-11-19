<?php

namespace App\Http\Controllers;

use App\Models\Certification;
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

    public function getOpportunities(int $id)
    {
        $item = VolEntity::find($id);
        return view('website.vol_entity.opportunity', [
            'item' => $item
        ]);
    }

    public function showReviews(int $id)
    {
        $item = VolEntity::find($id);
        return view('website.vol_entity.show', [
            'item' => $item
        ]);
    }

    public function generateCertification(int $certId)
    {
        $certification = Certification::find($certId);
        return view('website.generate', [
           'certification' => $certification
        ]);
    }
}
