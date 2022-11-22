<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opportunity;
use App\Models\VolEntity;
use Illuminate\Http\Request;

class ReportAdminController extends Controller
{
    public function growthReport(Request $request)
    {
        $volEntityCountReigstered = VolEntity::count();
        $volEntityCountReject = VolEntity::where('VOL_ENTITY_STATUS', 2)->count();
        return view('admin.growth_report', [
            "volEntityCountReigstered" => $volEntityCountReigstered,
            "volEntityCountReject" => $volEntityCountReject,
        ]);
    }

    public function overallSatisfaction(Request $request)
    {
        $opps = Opportunity::with('volEntity')->get();
        return view('admin.overall_satisfaction', [
            "opps" => $opps,
        ]);
    }
}
