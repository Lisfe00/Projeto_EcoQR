<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EcoQRController;
use App\Http\Controllers\AuthController;


Route::get('/show', [AuthController::class, 'dashboard'])->name('show');

Route::get('/show/login', [AuthController::class, 'show_login'])->name('show.login');

Route::post('/show/login/do', [AuthController::class, 'login'])->name('show.login.do');


