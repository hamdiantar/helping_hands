<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;
use App\Http\Requests\VolEntity\OppRequest;
use App\Models\Opportunity;
use App\Traits\LoggerError;
use Exception;

class opportunityController extends Controller
{
    use LoggerError;

    private $view = 'volunteering-entity.opportunities.';

    public function index()
    {
        $items = Opportunity::where('VOL_ENTITY_ID', getAuthVolEntity()->VOL_ENTITY_ID)->get();
        return view($this->view . 'index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        return view($this->view . 'create');
    }

    public function show(int $id)
    {
        $item = Opportunity::findOrFail($id);
        return view($this->view . 'show', [
            'item' => $item
        ]);
    }

    public function store(OppRequest $request)
    {
        try {
            $data = $request->all();
            if (!$request->file('OPP_STATUS')) {
                $data['OPP_STATUS'] = 0;
            }
            Opportunity::create($data);
            notify()->smiley('success', 'Opportunity has been created successfully');
            return redirect()->route('volunteering-entity.opportunities.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function edit(int $id)
    {
        $item = Opportunity::findOrFail($id);
        return view($this->view . 'edit', [
            'item' => $item
        ]);
    }

    public function update(OppRequest $request, int $id)
    {
        try {
            $item = Opportunity::findOrFail($id);
            $data = $request->all();
            if (!$request->file('OPP_STATUS')) {
                $data['OPP_STATUS'] = 0;
            }
            $item->update($data);
            notify()->smiley('success', 'Opportunity has been Updated successfully');
            return redirect()->route('volunteering-entity.opportunities.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function destroy(int $id)
    {
        try {
            $item = Opportunity::findOrFail($id);
            $item->delete();
            notify()->smiley('success', 'Opportunity has been Deleted successfully');
            return redirect()->route('volunteering-entity.opportunities.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }
}
