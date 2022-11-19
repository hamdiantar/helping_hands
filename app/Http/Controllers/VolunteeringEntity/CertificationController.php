<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;
use App\Http\Requests\VolEntity\CertificationRequest;
use App\Models\Certification;
use App\Models\Opportunity;
use App\Traits\LoggerError;
use Exception;

class CertificationController extends Controller
{
    use LoggerError;

    private $view = 'volunteering-entity.certifications.';

    public function getOpp()
    {
        $items = Opportunity::where('VOL_ENTITY_ID', getAuthVolEntity()->VOL_ENTITY_ID)->get();
        return view($this->view . 'opportunities', [
            'items' => $items
        ]);
    }

    public function index(Opportunity $opportunity)
    {
        $items = Certification::where('OPP_ID', $opportunity->OPP_ID)->get();
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

    public function store(CertificationRequest $request, int $oppId)
    {
        try {
            $oldCertification = Certification::where([
                'OPP_ID' => $oppId,
                'VOL_ID' => $request->VOL_ID,
            ])->first();
            if ($oldCertification) {
                notify()->smiley('error', 'You have already added certification this volunteer before');
                return back();
            }
            $data = $request->all();
            $data['OPP_ID'] = $oppId;
            Certification::create($data);
            notify()->smiley('success', 'Certification has been created successfully');
            return redirect()->route('volunteering-entity.opportunities.certifications.index', $oppId);
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function edit(Opportunity $opportunity, Certification $certification)
    {
        $volEntity = getAuthVolEntity();
        $volunteers = $volEntity->requests;
        return view($this->view . 'edit', [
            'item' => $certification,
            'opportunity' => $opportunity,
            'volunteers' => $volunteers,
        ]);
    }

    public function update(CertificationRequest $request, int $oppId, int $id)
    {
        try {
            $item = Certification::findOrFail($id);
            $data = $request->all();
            $data['OPP_ID'] = $oppId;
            $item->update($data);
            notify()->smiley('success', 'Certification has been Updated successfully');
            return redirect()->route('volunteering-entity.opportunities.certifications.index', $oppId);
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function destroy(Opportunity $opportunity, Certification $certification)
    {
        try {
            $certification->delete();
            notify()->smiley('success', 'Certification has been Deleted successfully');
            return redirect()->route('volunteering-entity.opportunities.certifications.index', $opportunity->OPP_ID);
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }
}
