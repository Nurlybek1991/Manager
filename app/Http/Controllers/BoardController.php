<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function board(): string
    {
        $tasks = Task::all();
        return view('board', compact('tasks'));

    }


}
