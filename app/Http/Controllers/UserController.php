<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registration(): string
    {
        return view('registration');
    }

    public function create(Request $request): string
    {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = User:: create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect("login");
    }

    public function login(): string
    {
        return view('login');
    }

    public function checkLogin(Request $request): string
    {

        return redirect("board");
    }

}
