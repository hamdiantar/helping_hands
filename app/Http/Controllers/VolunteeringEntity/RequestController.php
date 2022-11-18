<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;
use App\Models\Request as RequestModel;
use App\Traits\LoggerError;
use Exception;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    use LoggerError;

    public function index()
    {
        $volEntity = getAuthVolEntity();
        $items = $volEntity->requests;
        return view('volunteering-entity.requests', [
            'items' => $items
        ]);
    }

    public function UpdateStatus(Request $request, int $id)
    {
        try {
            $req = RequestModel::find($id);
            $req->update([
                'REQ_STATUS' => $request->status
            ]);
            return redirect()->back()->with('success', 'Request has been updated successfully');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
}
