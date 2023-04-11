<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

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

Route::get('/about', function () {
    $name = request('name');
//    return view("about", [ 'name' => $name ]);
//    return view("about")->with('name', $name);
    return view("about", compact('name'));
});

Route::post('/store', function () {
    $name = request('name');
    return view('about', compact('name'));
});


//Route::get('/tasks', function () {
//    $tasks = ["task 1", "task 2", "task 3"];
//
//    return view('tasks', compact('tasks'));
//});
//
//Route::get('/show/{id}', function ($id) {
//    $tasks = ["task 1", "task 2", "task 3"];
//
//    $task = $tasks[$id];
//
//    return view("show", compact("task"));
//});

Route::get("/", function () {
    return redirect("/tasks");
});

Route::get('/tasks', [TasksController::class, 'index']);
Route::get('/show/{id}', [TasksController::class, 'show']);
Route::post('/tasks/store', [TasksController::class, 'store']);
Route::post('/tasks/delete/{id}', [TasksController::class, 'delete']);
