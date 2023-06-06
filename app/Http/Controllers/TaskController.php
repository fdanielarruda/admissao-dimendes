<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // All Tasks
    public function index() {
        return Task::orderBy('created_at', 'desc')->get();
    }

    // One Task
    public function show(Task $task) {
        return $task;
    }

    // Create Task
    public function store(Request $request) {
        return Task::create($request->all());
    }

    // Update Task
    public function update(Task $task, Request $request) {
        return $task->update($request->all());
    }

    // Destroy Task
    public function destroy(Task $task) {
        return $task->delete();
    }
}
