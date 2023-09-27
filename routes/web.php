<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControllerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InputController;

Route::get('/', [AuthControllerController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/input', [InputController::class, 'index']);

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

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('input');
});



