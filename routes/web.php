<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

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

Route::get('/dasboard_test', function () { return view('welcome');});
Route::get('/dashboard', function () { return view('app');}); 
Route::get('/forgot-password', function () { return view('reset');});
Route::get('/', function () { return view('login');});
// Route::get('/language', function () { return view('language');});
// Route::get('/login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [LoginController::class, 'index'])->name('login');
// Route::post('/post-login', [LoginController::class, 'postLogin'])->name('login.post'); 
// Route::get('/dashboard', [LoginController::class, 'dashboard']); 
// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');