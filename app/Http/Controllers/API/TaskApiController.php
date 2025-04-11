<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskApiController extends Controller
{
    public function index()
    {
        return auth()->user()->tasks;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'due_date' => 'required|date',
            'status' => 'required|in:pendente,em_andamento,concluido',
        ]);

        $task = auth()->user()->tasks()->create($data);

        return response()->json($task, 201);
    }

    public function show(Task $task)
    {
        return $task->user_id === auth()->id() ? $task : abort(403);
    }

    public function update(Request $request, Task $task)
    {
        if ($task->user_id !== auth()->id()) abort(403);

        $task->update($request->all());
        return response()->json($task);
    }

    public function destroy(Task $task)
    {
        if ($task->user_id !== auth()->id()) abort(403);

        $task->delete();
        return response()->json(null, 204);
    }
}