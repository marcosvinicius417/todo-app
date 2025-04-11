<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $query = auth()->user()->tasks();
    
        if ($request->filled('status') && in_array($request->status, ['pendente', 'em_andamento', 'concluido'])) {
            $query->where('status', $request->status);
        }
    
        if ($request->filled('due_date')) {
            $query->whereDate('due_date', $request->due_date);
        }
    
        $tasks = $query->get();
        return view('tasks.index', compact('tasks'));
    }
    
    public function create()
    {
        return view('tasks.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'required|date',
            'status' => 'required|in:pendente,em_andamento,concluido',
        ]);
    
        auth()->user()->tasks()->create($request->all());
    
        return redirect()->route('tasks.index');
    }
    
}
