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

Route::get('/', [EcoQRController::class, 'index']);

Route::get('/login', [EcoQRController::class, 'login']);

Route::get('/cadastro_fornecedor', [EcoQRController::class, 'cadastro_fornecedor']);

