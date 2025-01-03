<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where("completed", false)->get();
        return view("tasks", ["tasks" => $tasks]);
    }

    public function add(Request $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->completed = false;
        $task->save();
        $tasks = Task::where("completed", false)->get();
        return view("tasks", ["tasks" => $tasks]);
    }

    public function complete($id)
    {
        $task = Task::find($id);
        $task->completed = true;
        $task->save();
        $tasks = Task::where("completed", false)->get();
        return view("tasks", ["tasks" => $tasks]);
    }
}
