<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoardController extends Controller
{
//    public function index()
//    {
//        $tasks = Task::all();
//        $user = Auth::user();
//
//
//        return view('board', compact('tasks','user'));
//
//    }

    public function indexBoards()
    {
        $boards = Board::all();
        $user = Auth::user();
//        dd($boards);

        return view('board', compact('boards','user'));
    }

//    public function store(Request $request)
//    {
//        Task::create($request->all());
//
//        return redirect()->route('tasks.store');
//    }

    public function storeBoards(Request $request)
    {
        Board::create($request->all());

        return redirect()->route('storeBor');
    }

    public function editProfile(): string
    {
        return view('profile');
    }
}
