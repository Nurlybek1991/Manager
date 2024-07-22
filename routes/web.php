<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/registration', [UserController::class, 'registration'])->name('registration.registration');
Route::post('/registration', [UserController::class, 'create']);
Route::get('/login', [UserController::class, 'login'])->name('login.login');
Route::post('/login', [UserController::class, 'checkLogin']);
Route::get('/board', [BoardController::class, 'board'])->name('board.board');

//Route::get('/', function () {
//    return 'hello miKe';
//});
