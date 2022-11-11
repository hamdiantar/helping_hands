<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubscriptionRequest;
use App\Http\Requests\VolEntity\OppRequest;
use App\Models\Opportunity;
use App\Models\Subscription;
use App\Traits\LoggerError;
use Exception;

class SubscriptionController extends Controller
{
    use LoggerError;

    private $view = 'admin.subscription.';

    public function index()
    {
        $items = Subscription::all();
        return view($this->view . 'index', [
            'items' => $items
        ]);
    }

    public function create()
    {
        return view($this->view . 'create');
    }

    public function store(SubscriptionRequest $request)
    {
        try {
            $data = $request->all();
            Subscription::create($data);
            notify()->smiley('success', 'Subscription has been created successfully');
            return redirect()->route('admin.subscription.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function edit(int $id)
    {
        $item = Subscription::findOrFail($id);
        return view($this->view . 'edit', [
            'item' => $item
        ]);
    }

    public function update(SubscriptionRequest $request, int $id)
    {
        try {
            $item = Subscription::findOrFail($id);
            $data = $request->all();
            $item->update($data);
            notify()->smiley('success', 'Subscription has been Updated successfully');
            return redirect()->route('admin.subscription.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function destroy(int $id)
    {
        try {
            $item = Subscription::findOrFail($id);
            $item->delete();
            notify()->smiley('success', 'Subscription has been Deleted successfully');
            return redirect()->route('admin.subscription.index');
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }
}
