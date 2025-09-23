<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware('auth')->group(function () {
    Route::get('/weight_logs', [UserController::class, 'index']);
});
Route::get('/login',[UserController::class,'login'])->name('login');

Route::get('/register/step1',[UserController::class,'step1']);
Route::post('/register/step1',[UserController::class,'create1']);

Route::get('/register/step2',[UserController::class,'step2']);
Route::post('/register/step2',[UserController::class,'create2']);


