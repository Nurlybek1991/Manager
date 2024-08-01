<?php

namespace App\Http\Controllers;

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
        return view('profile');
    }

    public function editTask(): string
    {
        return view('task');
    }
}
