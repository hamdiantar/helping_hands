<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\VolEntity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = VolEntity::where('VOL_ENTITY_STATUS', 1);
        if ($request->filled('key'))  {
            $items = $items->where('VOL_ENTITY_NAME', 'like', '%' .$request->key. '%')
                ->orWhere('VOL_ENTITY_SECTOR', 'like', '%' .$request->key. '%');
        }

        return view('website.vol_entity.list', [
            'items' => $items->get()
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
