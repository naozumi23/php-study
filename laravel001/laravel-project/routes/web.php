<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Task;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/tasks", [TaskController::class, "index"])->name("tasks.index");
Route::post("/tasks/add", [TaskController::class, "add"])->name("tasks.add");
Route::post("/tasks/{id}/complete", [TaskController::class, "complete"])->name("tasks.complete");
