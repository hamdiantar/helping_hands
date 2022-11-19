<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;
use App\Models\Opportunity;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function showPerformanceReport(Request $request)
    {
        $volEntity = getAuthVolEntity();
        $items = Opportunity::where('VOL_ENTITY_ID', $volEntity->VOL_ENTITY_ID);
        if ($request->filled('date_from') && $request->filled('date_to')) {
            $items = $items->whereBetween('OPP_START_DATE', [$request->date_from, $request->date_to]);
        }
        return view('volunteering-entity.performance_report', [
            'items' => $items->get()
        ]);
    }
}
