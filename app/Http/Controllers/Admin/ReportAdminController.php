<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Compliant;
use App\Models\Opportunity;
use App\Models\Package;
use App\Models\Subscription;
use App\Models\VolEntity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportAdminController extends Controller
{
    public function growthReport(Request $request)
    {
        $volEntityCountReigstered = VolEntity::query();
        $volEntityCountAccepted = VolEntity::where('VOL_ENTITY_STATUS', 1);
        $volEntityCountPending = VolEntity::where('VOL_ENTITY_STATUS', 0);
        $volEntityCountReject = VolEntity::where('VOL_ENTITY_STATUS', 2);
        if ($request->filled('VOL_ENTITY_SECTOR')) {
            $volEntityCountReigstered = $volEntityCountReigstered->where('VOL_ENTITY_SECTOR', $request->VOL_ENTITY_SECTOR);
            $volEntityCountAccepted = $volEntityCountAccepted->where('VOL_ENTITY_SECTOR', $request->VOL_ENTITY_SECTOR);
            $volEntityCountPending = $volEntityCountPending->where('VOL_ENTITY_SECTOR', $request->VOL_ENTITY_SECTOR);
            $volEntityCountReject = $volEntityCountReject->where('VOL_ENTITY_SECTOR', $request->VOL_ENTITY_SECTOR);
        }
        $subs = Subscription::with('package');
        if ($request->filled('date_from') && $request->filled('date_to')) {
            $subs = $subs->whereBetween('SUB_DATE', [$request->date_from, $request->date_to]);
        }
       $total = 0;
        $subsData = $subs->get();
       foreach ($subsData as $sub) {
           $total += optional($sub->package)->PACKAGE_PRICE;
       }
        return view('admin.growth_report', [
            "subs" => $subsData,
            "total" => $total,
            "volEntityCountReigstered" => $volEntityCountReigstered->get(),
            "volEntityCountReject" => $volEntityCountReject->get(),
            "volEntityCountPending" => $volEntityCountPending->get(),
            "volEntityCountAccepted" => $volEntityCountAccepted->get(),
            "dataset" => [count($volEntityCountAccepted->get()), count($volEntityCountPending->get()), count($volEntityCountReject->get())],
        ]);
    }

    public function overallSatisfaction(Request $request)
    {
        $opps = Opportunity::with(['volEntity'])->get();
        return view('admin.overall_satisfaction', [
            "opps" => $opps,
        ]);
    }

    public function reportPackages(Request $request)
    {
        $packages = Package::withCount('subs')->orderBy('subs_count', 'desc');
        if ($request->filled('VOL_ENTITY_SECTOR')) {
            $packages = $packages->whereHas('subs', function ($q) use ($request) {
                $q->whereHas('volEntity', function ($q2) use ($request){
                    $q2->where('VOL_ENTITY_SECTOR', $request->VOL_ENTITY_SECTOR);
                });
            });
        }
        return view('admin.report_packages', [
            "packages" => $packages->get(),
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

    public function reportComplaintByEntity(Request $request, int $id)
    {
        $volEntity = VolEntity::find($id);
        $complaints = Compliant::where('type', 'from_volunteer')->where('VOL_ENTITY_ID', $volEntity->VOL_ENTITY_ID);
        if ($request->filled('date_from') && $request->filled('date_to')) {
            $complaints = $complaints->whereBetween('COMP_DATE', [$request->date_from, $request->date_to]);
        }

        return view('admin.complaint_by_entity', [
            "volEntity" => $volEntity,
            "complaints" => $complaints->get(),
        ]);
    }
}
