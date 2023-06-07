<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    // All Tasks
    public function index() {
        $tasks = Task::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();

        return view('task.index', compact('tasks'));
    }

    // Create Tasks
    public function create() {
        return view('task.create');
    }

    // Store Task
    public function store(TaskRequest $request) {
        Task::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description
        ]);

        notify()->success('Atividade cadastrada', 'Sucesso');

        return redirect()->route('task.index');
    }

    // Edit Task
    public function edit(Task $task) {
        if ($task->user_id != Auth::id())
            return view('errors.404');

        return view('task.create', compact('task'));
    }

    // Update Task
    public function update(Task $task, TaskRequest $request) {
        if ($task->user_id != Auth::id())
            return redirect()->back();

        $task->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        notify()->success('Atividade editada', 'Sucesso');

        return redirect()->route('task.index');
    }

    // Delete Task
    public function delete(Task $task) {
        if ($task->user_id != Auth::id())
            return view('errors.404');

        $task->delete();

        notify()->success('Atividade deletada', 'Sucesso');

        return redirect()->route('task.index');
    }
}
