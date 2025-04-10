<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\User;

Route::get('/', function () {
    $users = User::all();
    return view('tasks.users')->with('users', $users);
});


Route::get('/users/{user}/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/users/{user}/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/users/{user}/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/users/{user}/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::get('/users/{user}/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
Route::put('/users/{user}/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/users/{user}/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
