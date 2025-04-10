<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function index(User $user)
    {
        $tasks = $user->tasks;
        return view('tasks.index', compact('tasks', 'user'));
    }

    public function create(User $user)
    {
        return view('tasks.create', compact('user'));
    }

    public function store(Request $request, User $user)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => 'in:pending,in_progress,completed'
        ]);

        $user->tasks()->create($validated);

        return redirect()->route('tasks.index', $user)->with('success', 'Task created successfully');
    }

    public function show($userId, $taskId)
    {
        $task = Task::where('user_id', $userId)->findOrFail($taskId);
        $user = User::findOrFail($userId);
        return view('tasks.show', compact('task', 'user'));
    }


    public function edit(User $user, Task $task)
    {
        return view('tasks.edit', compact('task', 'user'));
    }

    public function update(Request $request, User $user, Task $task)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => 'in:pending,in_progress,completed'
        ]);

        $task->update($validated);

        return redirect()->route('tasks.index', $user)->with('success', 'Task updated successfully');
    }

    public function destroy(User $user, Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index', $user)->with('success', 'Task deleted successfully');
    }
}
