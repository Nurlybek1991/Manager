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
Route::post('/registration', [UserController::class, 'create'])->name('registrate');

Route::get('/login', [UserController::class, 'login'])->name('login.login');
Route::post('/login', [UserController::class, 'checkLogin'])->name('login');


//Route::get('/board', [BoardController::class, 'index'])->name('tasks.index');
//Route::post('/board', [BoardController::class, 'store'])->name('tasks.store');
Route::get('/board', [BoardController::class, 'indexBoards'])->name('boards');
Route::post('/board', [BoardController::class, 'storeBoards'])->name('storeBor');
Route::get('/profile', [BoardController::class, 'editProfile'])->name('editProfile');
