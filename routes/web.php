<?php

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
UsersFeature

//administratorzy
Route::middleware('isAdmin')->group(function () {
Route::resource('users',UserController::class);
});
//zalogowani użytkwonicy
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
 dev

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();