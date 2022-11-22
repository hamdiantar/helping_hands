<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VolEntity;
use App\Traits\LoggerError;
use Exception;
use Illuminate\Http\RedirectResponse;

class VolunteeringEntityController extends Controller
{
    use LoggerError;

    private $view = 'admin.volunteering-entity.';

    public function index()
    {
        $items = VolEntity::where('VOL_ENTITY_STATUS', '!=', 0)->get();
        return view($this->view.'index', [
            'items' => $items
        ]);
    }

    public function getJoiningRequests()
    {
        $items = VolEntity::where('VOL_ENTITY_STATUS', 0)->get();
        return view($this->view.'index', [
            'items' => $items
        ]);
    }

    public function UpdateStatus(int $id, int $status): RedirectResponse
    {
        $item = VolEntity::findOrFail($id);
        $item->update([
            'VOL_ENTITY_STATUS' => $status
        ]);
        notify()->smiley('success', 'Volunteering entity has been Updated successfully');
        return back();
    }


    public function show(int $id)
    {
        $item = VolEntity::findOrFail($id);
        return view($this->view.'show', [
            'item' => $item
        ]);
    }
    public function destroy(int $id)
    {
        try {
            $item = VolEntity::findOrFail($id);
            $item->delete();
            notify()->smiley('success', 'Volunteering Entity has been Deleted successfully');
            return redirect()->route('admin.volunteering-entity.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }
}
