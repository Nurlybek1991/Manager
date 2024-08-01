<?php

namespace App\Http\Controllers;

use App\Models\Board;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BoardController extends Controller
{

    public function boardInfo()
    {

        $boards = Board::all();
//        $users = DB::table('boards')->distinct()->get();

//        $users = DB::table('boards',)
//            ->select('*')
//            ->get();
//        var_dump($users);
        return view('board', compact('boards'));

    }

    public function editBoard(Request $request)
    {

        Board::create($request->all());

        return redirect()->route('editBoard');

    }

    public function deleteBoard(Request $request)
    {

        $boards = Board::destroy($request->all());
//        var_dump($boards);

        return redirect()->route('editBoard');

    }

//    public function edit($user_id)
//    {
//
//        Board::all();
//
//        return redirect()->route('editBoard');
////        var_dump($koki);
//    }

//    public function storeBoards(Request $request)
//    {
//        Board::create($request->all());
//
//        return redirect()->route('storeBor');
//    }
//    public function index()
//    {
//        $tasks = Task::all();
//        $user = Auth::user();
//
//
//        return view('board', compact('tasks','user'));
//
//    }

//    public function store(Request $request)
//    {
//        Task::create($request->all());
//
//        return redirect()->route('tasks.store');
//    }


}
