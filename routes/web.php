<?php

use App\Http\Controllers\login_signupcontroller;
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


Route::get('/', [login_signupcontroller::class, 'home']);
Route::post('/', [login_signupcontroller::class, 'signup'])->name('sign_up');
Route::get('/login', [login_signupcontroller::class, 'login'])->name('log_in');
// Route::post('/', [login_signupcontroller::class, 'login'])->name('login');
Route::post('/login', [login_signupcontroller::class, 'detailverify'])->name('detail_verify');