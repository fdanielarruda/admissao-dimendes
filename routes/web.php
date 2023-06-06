<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('task')->controller(TaskController::class)->group(function () {
    Route::get('/', 'index')->name('task.index');
    
    // VIEW CREATE AND STORE
    Route::get('/create', 'create')->name('task.create');
    Route::post('/', 'store')->name('task.store');

    // VIEW EDIT AND SAVE
    Route::get('/{task}/edit', 'edit')->name('task.edit');
    Route::put('/{task}', 'update')->name('task.update');

    Route::get('/{task}/delete', 'delete')->name('task.delete');
});
