<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Task;
use Illuminate\Http\Request;
//use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function userInfo()
    {
        $user = Auth::user();

        return view('main', compact('user'));
    }

    public function editProfile(): string
    {
        $user = Auth::user();

        return view('profile', compact('user'));
//        return view('profile');
    }

    public function editTask()
    {
        $tasks = Task::all();

        return view('task', compact('tasks'));

    }

    public function createTask(Request $request)
    {

//        $id = Auth::id();
//        $boardId = Board::find($id);

        $tasks = Task::create([
            'title' => $request->input('title'),
            'board_id' => $request->input('board_id')
        ]);

        return redirect()->route('editTask');
    }
}
