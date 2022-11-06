<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;
use App\Http\Requests\VolEntity\CharacteristicRequest;
use App\Models\Characteristic;
use App\Models\Opportunity;
use App\Traits\LoggerError;
use Exception;

class CharacteristicController extends Controller
{
    use LoggerError;

    private $view = 'volunteering-entity.characteristic.';

    public function index(Opportunity $opportunity)
    {
        $items = Characteristic::where('OPP_ID', $opportunity->OPP_ID)->get();
        return view($this->view . 'index', [
            'items' => $items,
            'opportunity' => $opportunity,
        ]);
    }

    public function create(Opportunity $opportunity)
    {
        return view($this->view . 'create', [
            'opportunity' => $opportunity
        ]);
    }

    public function store(CharacteristicRequest $request, int $oppId)
    {
        try {
            $data = $request->all();
            Characteristic::create($data);
            notify()->smiley('success', 'Characteristic has been created successfully');
            return redirect()->route('volunteering-entity.opportunities.characteristic.index', $oppId);
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function edit(Opportunity $opportunity, Characteristic $characteristic)
    {
        return view($this->view . 'edit', [
            'item' => $characteristic,
            'opportunity' => $opportunity,
        ]);
    }

    public function update(CharacteristicRequest $request, int $oppId, int $id)
    {
        try {
            $item = Characteristic::findOrFail($id);
            $data = $request->all();
            $item->update($data);
            notify()->smiley('success', 'Characteristic has been Updated successfully');
            return redirect()->route('volunteering-entity.opportunities.characteristic.index', $oppId);
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function destroy(Opportunity $opportunity, Characteristic $characteristic)
    {
        try {
            $characteristic->delete();
            notify()->smiley('success', 'Characteristic has been Deleted successfully');
            return redirect()->route('volunteering-entity.opportunities.characteristic.index', $opportunity->OPP_ID);
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }
}
