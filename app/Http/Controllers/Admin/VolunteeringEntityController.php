<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VolEntity;
use Illuminate\Http\RedirectResponse;

class VolunteeringEntityController extends Controller
{
    private $view = 'admin.volunteering-entity.';

    public function index()
    {
        $items = VolEntity::all();
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
}
