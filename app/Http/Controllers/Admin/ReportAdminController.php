<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Compliant;
use App\Models\Opportunity;
use App\Models\Package;
use App\Models\VolEntity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        DB::enableQueryLog();
        $opps = Opportunity::with(['volEntity'])->get();
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
        $entities = VolEntity::withCount('compliants')->whereHas('compliants', function ($q) {
            $q->where('type', 'from_volunteer');
        })->orderBy('compliants_count', 'desc')->get();
        $labels = $entities->pluck('VOL_ENTITY_NAME');
        $datasets = $entities->pluck('compliants_count');
        return view('admin.report_complaint', [
            "entities" => $entities,
            "labels" => $labels,
            "datasets" => $datasets,
        ]);
    }

    public function reportComplaintByEntity(int $id)
    {
        $volEntity = VolEntity::find($id);
        $complaints = Compliant::where('type', 'from_volunteer')->where('VOL_ENTITY_ID', $volEntity->VOL_ENTITY_ID)->get();

        return view('admin.complaint_by_entity', [
            "volEntity" => $volEntity,
            "complaints" => $complaints,
        ]);
    }
}
