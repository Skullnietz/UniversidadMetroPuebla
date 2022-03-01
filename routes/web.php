<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
//Route::get('/', function () {return view('dashboard');})->name('dashboard');

// Vistas
Route::get('/', function () {return view('dashboard');})->name('dashboard');
Route::get('/login', function () {return view('auth.login');})->name('login');
Route::get('/register', function () {return view('auth.register');})->name('register');
Route::get('/home', function () {return view('home');})->name('home');
Route::get('/profile.edit', function () {return view('profile.edit');})->name('profile.edit');
Route::get('/table', function () {return view('pages.tablelist');})->name('table');
Route::get('/typography', function () {return view('pages.typography');})->name('typography');
Route::get('/icons', function () {return view('pages.icons');})->name('icons');
Route::get('/map', function () {return view('pages.map');})->name('map');
Route::get('/notifications', function () {return view('pages.notifications');})->name('notifications');
Route::get('/language', function () {return view('pages.language');})->name('language');
Route::get('/formulario', function () {return view('pages.formulario');})->name('formulario');
Route::get('/profile.update', function () {return view('profile.edit');})->name('profile.update');

//UserController
Route::get('/users.edit', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');

// Logout
Route::get('/exit', function () {"saliste";})->name('logout');