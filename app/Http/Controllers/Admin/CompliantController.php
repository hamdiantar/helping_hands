<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Compliant;
use App\Traits\LoggerError;
use Exception;
use Illuminate\Http\Request;

class CompliantController extends Controller
{
    use LoggerError;

    private $view = 'admin.compliant.';

    public function index()
    {
        $items = Compliant::all();
        return view($this->view . 'index', [
            'items' => $items
        ]);
    }

    public function show(Compliant $compliant)
    {
        return view($this->view . 'show', [
            'compliant' => $compliant
        ]);
    }

    public function edit(Compliant $compliant)
    {
        return view($this->view . 'edit', [
            'compliant' => $compliant
        ]);
    }

    public function update(Request $request, Compliant $compliant)
    {
        try {
            $compliant->update([
                'COMP_REPLY' => $request->COMP_REPLY,
                'COMP_STATUS' => 'replied',
            ]);
            notify()->smiley('success', 'Replay has been added successfully');
            return redirect()->route('admin.compliant.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }
}
