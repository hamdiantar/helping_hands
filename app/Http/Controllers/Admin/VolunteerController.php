<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\LoggerError;
use Exception;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    use LoggerError;

    private $view = 'admin.volunteers.';

    public function index(Request $request)
    {
        $items = User::query();
        if ($request->filled('VOL_CITY')) {
            $items = $items->where('VOL_CITY', $request->VOL_CITY);
        }
        return view($this->view.'index',[
            'items' => $items->get()
        ]);
    }


    public function show(int $userId)
    {
        $item = User::findOrFail($userId);
        return view($this->view.'show', compact('item'));
    }

    public function destroy(int $userId)
    {
        try {
            $item = User::findOrFail($userId);
            $item->delete();
            notify()->smiley('success', 'Volunteer has been Deleted successfully');
            return redirect()->route('admin.volunteers.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }
}
