<?php

namespace App\Http\Controllers;
use App\Models\Task;
class TaskController extends Controller {
    public function index(){
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    public function show($id){
        $task = Task::findOrFail($id);
        if(!$task){
            abort(404);
        }
        return view('tasks.show', compact('task'));
    }
}
