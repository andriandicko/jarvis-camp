<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        //mengambil semua data task di model
        $tasks = Task::getAll();

        // mengirim data task ke view
        return view('tasks/index', [
            'tasks' =>$tasks,
        ]);
    }

    public function show ($id)
    {
        // masukkan logicnya
    //     $task = Task::find($id);

    // if (!$task) {
    //     abort(404);
    // }

    return view('tasks.show');

    }
}
