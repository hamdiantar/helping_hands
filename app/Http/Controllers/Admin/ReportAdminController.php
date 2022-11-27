<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Compliant;
use App\Models\Opportunity;
use App\Models\Package;
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

    public function reportPackages()
    {
        $packages = Package::withCount('subs')->orderBy('subs_count', 'desc')->get();
        return view('admin.report_packages', [
            "packages" => $packages,
        ]);
    }

    public function reportComplaint()
    {
        $entities = VolEntity::withCount('compliants')->orderBy('compliants_count', 'desc')->get();
        return view('admin.report_complaint', [
            "entities" => $entities,
        ]);
    }
}
