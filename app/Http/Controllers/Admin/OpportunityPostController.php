<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opportunity;
use App\Models\VolEntity;

class OpportunityPostController extends Controller
{
    public function getOpportunities()
    {
        $items = Opportunity::where('OPP_STATUS', 0)->get();
        return view('admin.opportunities_posts.list', [
            'items' => $items
        ]);
    }

    public function getOpportunitiesDetails(int $intOppoID, int $volEntityID)
    {
        $item = VolEntity::find($volEntityID);
        $oppo = Opportunity::find($intOppoID);
        return view('admin.opportunities_posts.show', [
            'item' => $item,
            'opp' => $oppo,
        ]);
    }

    public function confirmPost(int $id)
    {
        $item = Opportunity::findOrFail($id);
        $item->update([
            'OPP_STATUS' => 1
        ]);
        notify()->smiley('success', 'Opportunity has been published successfully');
        return back();
    }
}
