<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use App\Models\VolEntity;
use App\Traits\LoggerError;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VolunteeringEntityController extends Controller
{
    use LoggerError;

    private $view = 'admin.volunteering-entity.';

    public function index(Request $request)
    {
        $items = VolEntity::where('VOL_ENTITY_STATUS', 1);
        if ($request->filled('status')) {
            $items = $items->where('VOL_ENTITY_STATUS', $request->status);
        }
        return view($this->view.'index', [
            'items' => $items->get(),
        ]);
    }

    public function getJoiningRequests()
    {
        $items = VolEntity::whereIn('VOL_ENTITY_STATUS', [2,0])->get();
        return view($this->view.'index', [
            'items' => $items,
            'filter' => true,
        ]);
    }

    public function UpdateStatus(int $id, int $status): RedirectResponse
    {
        $item = VolEntity::findOrFail($id);
        $item->update([
            'VOL_ENTITY_STATUS' => $status
        ]);
        $data = [
          'name' => $item->VOL_ENTITY_NAME
        ];
        Mail::to($item->VOL_ENTITY_EMAIL)->send(new SendEmail($data));
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
