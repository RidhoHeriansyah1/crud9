<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [SiswaController::class, 'dashboard'])->name('dashboard')->middleware('Login');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('Tamu');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin')->middleware('Tamu');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register')->middleware('Tamu');
Route::post('/create', [LoginController::class, 'create'])->name('create')->middleware('Tamu');

Route::resource('mastersport', SiswaController::class);



