<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::where('user_id', auth()->id())->get();
        
        return view('tasks.index', ['tasks' => $tasks->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $task = new Task;
        return view('tasks.create', ['task' => $task]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ]);
    
        // Automatically attach the authenticated user's ID
        $validated['user_id'] = auth()->id();
    
        // Save the task
        $task = Task::create($validated);
        
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::where('id', $id)->where('user_id', auth()->id())->first();
        if(!$task){
            return redirect()->route('index');
        }
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::where('id', $id)->where('user_id', auth()->id())->first();
        if(!$task){
            return redirect()->route('index');
        }
        return view('tasks.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::where('id', $id)->where('user_id', auth()->id())->first();
        $task->content = $request->content;
        $task->status = $request->status;
        $task->save();
        
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::where('id', $id)->where('user_id', auth()->id())->first();
        $task->delete();
        
        return redirect('/tasks');
    }
}
