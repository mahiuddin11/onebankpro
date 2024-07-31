<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SignupController::class, 'loginPageShow'])->name('login');
Route::get('/signup', [SignupController::class, 'signUp_pageShow'])->name('signup');


Route::post('/store', [SignupController::class, 'store'])->name('store');
Route::post('/log-in', [SignupController::class, 'log_in'])->name('log-in');