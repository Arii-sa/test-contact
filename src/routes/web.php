<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('/', [AuthController::class, 'create']);
Route::post('/confirm', [AuthController::class, 'confirm']);
Route::post('/thanks', [AuthController::class, 'store']);

Route::middleware('auth')->group(function() {
    Route::get('/index',[AuthController::class, 'index']);
});

