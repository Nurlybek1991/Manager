<?php

use App\Http\Controllers\BoardController;
use App\Http\Controllers\MainController;
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

Route::controller(BoardController::class)->group(function () {
    Route::get('/board', [BoardController::class, 'boardInfo'])->name('board');
    Route::post('/board', [BoardController::class, 'editBoard'])->name('editBoard');
    Route::delete('/board/deleteBoard/{id}', [BoardController::class, 'deleteBoard'])->name('deleteBoard');
});

Route::post('/task/createTask', [MainController::class, 'createTask'])->name('createTask');
Route::get('/main', [MainController::class, 'userInfo'])->name('main');
Route::post('/main', [MainController::class, 'storeBoards'])->name('storeBor');
Route::get('/profile', [MainController::class, 'editProfile'])->name('editProfile');
Route::get('/task', [MainController::class, 'editTask'])->name('editTask');

