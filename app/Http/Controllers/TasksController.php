<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{

    public function index() {
//        $tasks = DB::table("tasks")->get();
        $tasks = Task::all();

        return view('tasks', compact('tasks'));
    }

    public function show($id) {
//        $task = DB::table("tasks")->find($id);
        $task = Task::find($id);

        return view("show", compact("task"));
    }

    public function store() {
        $task = new Task;
        $task->name = request()->name;
        $task->save();

        return redirect()->back();
    }

    public function delete($id) {
        $task = Task::find($id);
        $task->delete();
        return redirect()->back();
    }
}
