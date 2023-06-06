<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::prefix('task')->controller(TaskController::class)->group(function () {
//     Route::get('/', 'index');
//     Route::get('/{task}', 'show');
//     Route::post('/', 'store');
//     Route::put('/{task}', 'update');
//     Route::delete('/{task}', 'destroy');
// });
