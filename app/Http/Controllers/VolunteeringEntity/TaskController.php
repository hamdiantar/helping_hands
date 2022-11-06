<?php

namespace App\Http\Controllers\VolunteeringEntity;

use App\Http\Controllers\Controller;
use App\Http\Requests\VolEntity\TaskRequest;
use App\Models\Opportunity;
use App\Models\Task;
use App\Traits\LoggerError;
use Exception;

class TaskController extends Controller
{
    use LoggerError;

    private $view = 'volunteering-entity.tasks.';

    public function index(Opportunity $opportunity)
    {
        $items = Task::where('OPP_ID', $opportunity->OPP_ID)->get();
        return view($this->view . 'index', [
            'items' => $items,
            'opportunity' => $opportunity,
        ]);
    }

    public function create(Opportunity $opportunity)
    {
        return view($this->view . 'create', [
            'opportunity' => $opportunity
        ]);
    }

    public function store(TaskRequest $request, int $oppId)
    {
        try {
            $data = $request->all();
            Task::create($data);
            notify()->smiley('success', 'Task has been created successfully');
            return redirect()->route('volunteering-entity.opportunities.tasks.index', $oppId);
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function edit(Opportunity $opportunity, Task $task)
    {
        return view($this->view . 'edit', [
            'item' => $task,
            'opportunity' => $opportunity,
        ]);
    }

    public function update(TaskRequest $request, int $oppId, int $id)
    {
        try {
            $item = Task::findOrFail($id);
            $data = $request->all();
            $item->update($data);
            notify()->smiley('success', 'Task has been Updated successfully');
            return redirect()->route('volunteering-entity.opportunities.tasks.index', $oppId);
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }

    public function destroy(Opportunity $opportunity, Task $task)
    {
        try {
            $task->delete();
            notify()->smiley('success', 'Task has been Deleted successfully');
            return redirect()->route('volunteering-entity.opportunities.tasks.index', $opportunity->OPP_ID);
        } catch (Exception $exception) {
            $this->logErrors($exception);
            notify()->smiley('error', 'something went wrong');
            return back();
        }
    }
}
