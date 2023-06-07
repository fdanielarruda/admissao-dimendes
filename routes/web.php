<?php

use App\Http\Controllers\{
    TaskController,
    AuthController
};
use Illuminate\Support\Facades\Route;

// MIDDLEWARE FOR ROUTES THAT DO NOT NEED TO BE AUTHENTICATED
Route::middleware(['not_auth'])->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'auth'])->name('auth');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/store_user', [AuthController::class, 'store_user'])->name('store_user');
});

// MIDDLEWARE AUTH
Route::middleware(['auth_test'])->group(function () {
    
    // ROUTE OF LOGOUT
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // ROUTES OF TASKS
    Route::prefix('task')->controller(TaskController::class)->group(function () {
        
        // LIST OF ALL TASKS
        Route::get('/', 'index')->name('task.index');
        
        // VIEW CREATE AND STORE
        Route::get('/create', 'create')->name('task.create');
        Route::post('/', 'store')->name('task.store');
    
        // VIEW EDIT AND SAVE
        Route::get('/{task}/edit', 'edit')->name('task.edit');
        Route::put('/{task}', 'update')->name('task.update');
    
        // DELETE ONE TASK
        Route::get('/{task}/delete', 'delete')->name('task.delete');
    }); 
});

Route::fallback(function () {
    return view('errors.404');
});