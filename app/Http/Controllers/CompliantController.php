<?php

namespace App\Http\Controllers;

use App\Models\Compliant;
use App\Models\VolEntity;
use App\Traits\LoggerError;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CompliantController extends Controller
{
    use LoggerError;

    public function getCompliantForm(Request $request)
    {
        $volEntity = VolEntity::findOrFail($request->vol_entity_id);
        return view('website.compliant', [
            'volEntity' => $volEntity
        ]);
    }

    public function addCompliant(Request $request): RedirectResponse
    {
        try {
            $data = $request->all();
            Compliant::create($data);
            return redirect()->back()->with('success', 'Compliant has been sent successfully');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            return redirect()->back()->with('error', 'something went wrong');
        }
    }
}
