<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    // All Tasks
    public function index() {
        $tasks = Task::orderBy('created_at', 'desc')->get();

        return view('task.index', compact('tasks'));
    }

    // Create Tasks
    public function create() {
        return view('task.create');
    }

    // Store Task
    public function store(TaskRequest $request) {
        Task::create($request->all());

        return redirect()->route('task.index');
    }

    // Edit Task
    public function edit(Task $task) {
        return view('task.create', compact('task'));
    }

    // Update Task
    public function update(Task $task, TaskRequest $request) {
        $task->update($request->all());

        return redirect()->route('task.index');
    }

    // Delete Task
    public function delete(Task $task) {
        $task->delete();

        return redirect()->route('task.index');
    }
}
