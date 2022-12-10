<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;
use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{

    public function showPerformanceReport(Request $request)
    {
        $volEntity = getAuthVolEntity();
        $items = Opportunity::withCount('attends')->where('VOL_ENTITY_ID', $volEntity->VOL_ENTITY_ID);
        if ($request->filled('date_from') && $request->filled('date_to')) {
            $items = $items->whereBetween('OPP_START_DATE', [$request->date_from, $request->date_to]);
        }
        $labels = $items->pluck('OPP_NAME');
        $dataSet1 = $items->withCount('applicantsAccept')->pluck('applicants_accept_count');
        $dataSet2 = $items->withCount('applicantsReject')->pluck('applicants_reject_count');
        return view('volunteering-entity.performance_report', [
            'items' => $items->get(),
            'labels' => $labels,
            'dataSet1' => $dataSet1,
            'dataSet2' => $dataSet2,
        ]);
    }
}
