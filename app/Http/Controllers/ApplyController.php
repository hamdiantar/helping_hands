<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use App\Models\Request as RequestModel;
use App\Models\VolEntity;
use App\Traits\LoggerError;
use Exception;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    use LoggerError;

    public function showApplyForm(int $volEntityId, int $oppId)
    {
        $item = VolEntity::find($volEntityId);
        $opp = Opportunity::find($oppId);
        return view('website.apply', [
            'item' => $item,
            'opp' => $opp,
        ]);
    }

    public function apply(Request $request, int $volEntityId, int $oppId)
    {
        try {
            $oldRequest = RequestModel::where([
                'VOL_ID' => getAuthVolunteer()->VOL_ID,
                'OPP_ID' => $oppId,
            ])->first();
            $voleunteer = getAuthVolunteer();
            if ($voleunteer->remainingHours() == 0) {
                return redirect()->back()->with('error', 'please reset your target hours');
            }
            if ($oldRequest)  {
                return redirect()->back()->with('error', 'you have already applied in this opportunity before');
            }
            date_default_timezone_set('Asia/Riyadh');
            RequestModel::create([
                'REQ_TYPE' => 'vol_joining_request',
                'REQ_DESCRIPTION' => $request->REQ_DESCRIPTION,
                'VOL_ENTITY_ID' => $volEntityId,
                'VOL_ID' => getAuthVolunteer()->VOL_ID,
                'OPP_ID' => $oppId,
                'REQ_DATE' => now(),
            ]);
            return redirect()->back()->with('success', 'Request has been sent successfully');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
}
