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
//        dd(session()->all());
        return view('registration');
    }

    public function create(Request $request): string
    {
        $request->validate([
            'firstname' => 'required|string|min:3',
            'lastname' => 'required|string|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = User:: create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect("login");
    }

    public function login(): string
    {
        return view('login');
    }

    public function checkLogin(Request $request): string
    {


        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()
                ->withInput()
                ->withErrors([
                    'email' => 'Эти учетные данные не соответствуют нашим записям.'
                ]);
        }

        $request->session()->regenerate();

        return redirect()->route('tasks.index');

    }

}
