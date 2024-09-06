<?php

namespace App\Http\Controllers;

use App\Models\Board;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use function Laravel\Prompts\warning;

class BoardController extends Controller
{

    public function boardInfo()
    {
        $id = Auth::id();
        $boards = Board::all()->where('user_id', $id);
        return view('board', compact('boards'));

    }

    public function editBoard(Request $request)
    {

        $id = Auth::id();
        Board::create([
            'title' => $request->input('title'),
            'user_id' => $id,
            'description' => $request->input('description')
        ]);

        return redirect()->route('board');

    }

    public function deleteBoard(int $id)
    {
        $boards = Board::find($id);
        $boards->delete();

        return redirect()->route('board');

    }

}
