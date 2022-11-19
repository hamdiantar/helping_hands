<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;
use App\Http\Requests\VolEntity\AttendanceRequest;
use App\Models\Attendence;
use App\Models\Opportunity;
use App\Traits\LoggerError;
use Exception;

class AttendancesController extends Controller
{
    use LoggerError;

    private $view = 'volunteering-entity.attendences.';

    public function index(Opportunity $opportunity)
    {
        $items = Attendence::where('OPP_ID', $opportunity->OPP_ID)->get();
        return view($this->view . 'index', [
            'items' => $items,
            'opportunity' => $opportunity,
        ]);
    }

    public function create(Opportunity $opportunity)
    {
        $volEntity = getAuthVolEntity();
        $volunteers = $volEntity->requests;
        return view($this->view . 'create', [
            'opportunity' => $opportunity,
            'volunteers' => $volunteers,
        ]);
    }

    public function store(AttendanceRequest $request, int $oppId)
    {
        try {
            $oldAttendance = Attendence::where([
                'OPP_ID' => $oppId,
                'VOL_ID' => $request->VOL_ID,
                'ATT_DATE' => $request->ATT_DATE,
            ])->first();
            if ($oldAttendance) {
                notify()->smiley('error', 'You have already added this volunteer before');
                return back();
            }
            $data = $request->all();
            $data['OPP_ID'] = $oppId;
            Attendence::create($data);
            notify()->smiley('success', 'Attendance has been created successfully');
            return redirect()->route('volunteering-entity.opportunities.attendances.index', $oppId);
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function edit(Opportunity $opportunity, Attendence $attendence)
    {
        $volEntity = getAuthVolEntity();
        $volunteers = $volEntity->requests;
        return view($this->view . 'edit', [
            'item' => $attendence,
            'opportunity' => $opportunity,
            'volunteers' => $volunteers,
        ]);
    }

    public function update(AttendanceRequest $request, int $oppId, int $id)
    {
        try {
            $item = Attendence::findOrFail($id);
            $data = $request->all();
            $data['OPP_ID'] = $oppId;
            $item->update($data);
            notify()->smiley('success', 'Attendance has been Updated successfully');
            return redirect()->route('volunteering-entity.opportunities.attendances.index', $oppId);
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function destroy(Opportunity $opportunity, Attendence $attendence)
    {
        try {
            $attendence->delete();
            notify()->smiley('success', 'Attendance has been Deleted successfully');
            return redirect()->route('volunteering-entity.opportunities.attendances.index', $opportunity->OPP_ID);
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }
}
