<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;
use App\Http\Requests\VolEntity\OppRequest;
use App\Http\Requests\VolEntity\VolComplaintRequest;
use App\Models\Compliant;
use App\Models\Opportunity;
use App\Models\User;
use App\Traits\LoggerError;
use Exception;

class CompliantController extends Controller
{
    use LoggerError;

    private $view = 'volunteering-entity.compliant.';

    public function index()
    {
        $items = Compliant::where('VOL_ENTITY_ID', getAuthVolEntity()->VOL_ENTITY_ID)->get();
        return view($this->view . 'index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        $volEntity = getAuthVolEntity();
        $volunteers = $volEntity->requests->unique('VOL_ID');;
        return view($this->view . 'create', [
            'volunteers' => $volunteers
        ]);
    }

    public function show(int $id)
    {
        $item = Compliant::findOrFail($id);
        return view($this->view . 'show', [
            'item' => $item
        ]);
    }

    public function store(VolComplaintRequest $request)
    {
        try {
            $volEntity = getAuthVolEntity();
            $data = $request->all();
            $data['VOL_ENTITY_ID'] = $volEntity->VOL_ENTITY_ID;
            Compliant::create($data);
            notify()->smiley('success', 'Compliant has been created successfully');
            return redirect()->route('volunteering-entity.compliant.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function edit(int $id)
    {
        $item = Compliant::findOrFail($id);
        $volEntity = getAuthVolEntity();
        $volunteers = $volEntity->requests->unique('VOL_ID');;
        return view($this->view . 'edit', [
            'volunteers' => $volunteers,
            'item' => $item,
        ]);
    }

    public function update(VolComplaintRequest $request, int $id)
    {
        try {
            $item = Compliant::findOrFail($id);
            $data = $request->all();
            $item->update($data);
            notify()->smiley('success', 'Opportunity has been Updated successfully');
            return redirect()->route('volunteering-entity.compliant.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function destroy(int $id)
    {
        try {
            $item = Compliant::findOrFail($id);
            $item->delete();
            notify()->smiley('success', 'Compliant has been Deleted successfully');
            return redirect()->route('volunteering-entity.compliant.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function getVolunteerWithComplaint(int $id)
    {
        $volunteer = User::find($id);
        return view($this->view . 'volunteer_compliant', [
            'volunteer' => $volunteer,
        ]);
    }
}
