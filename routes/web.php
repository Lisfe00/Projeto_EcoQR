<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/show/logout', [AuthController::class, 'logout'])->name('show.logout');

Route::post('/show/login/do', [AuthController::class, 'login'])->name('show.login.do');

Route::get('/show/cadastro_fornecedor', [EcoQRController::class, 'show_cadastro_fornecedor'])->name('show.cadastro.fornecedor');

Route::post('/show/cadastro_fornecedor/do', [EcoQRController::class, 'cadastro_fornecedor_do'])->name('cadastro.fornecedor.do');

Route::get('/show/show_fornecedors', [EcoQRController::class, 'show_fornecedors'])->name('show.fornecedors');