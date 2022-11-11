<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PackageRequest;
use App\Models\Opportunity;
use App\Models\Package;
use App\Traits\LoggerError;
use Exception;

class PackageController extends Controller
{
    use LoggerError;

    private $view = 'admin.packages.';

    public function index()
    {
        $items = Package::all();
        return view($this->view . 'index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        return view($this->view . 'create');
    }

    public function store(PackageRequest $request)
    {
        try {
            $data = $request->all();
            Package::create($data);
            notify()->smiley('success', 'Package has been created successfully');
            return redirect()->route('admin.packages.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function edit(int $id)
    {
        $item = Package::findOrFail($id);
        return view($this->view . 'edit', [
            'item' => $item
        ]);
    }

    public function update(PackageRequest $request, int $id)
    {
        try {
            $item = Package::findOrFail($id);
            $data = $request->all();
            $item->update($data);
            notify()->smiley('success', 'Package has been Updated successfully');
            return redirect()->route('admin.packages.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function destroy(int $id)
    {
        try {
            $item = Package::findOrFail($id);
            $item->delete();
            notify()->smiley('success', 'Package has been Deleted successfully');
            return redirect()->route('admin.packages.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }
}
