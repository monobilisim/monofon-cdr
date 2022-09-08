<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Authenticate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/login', [Authenticate::class,'login'])->name('login');
Route::get('/logout', [Authenticate::class,'logout'])->name('logout');
Route::get('/', function () {
    return view('welcome');
})->middleware('auth');
Route::post('login_post', [Authenticate::class,'login_post'])->name('login_post');


Route::get('/cdr', [User::class, 'login'])->name('cdr');
