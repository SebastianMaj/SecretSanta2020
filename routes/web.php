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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/loginsanta', [App\Http\Controllers\SantaUserController::class, 'LoginSanta'])->name('login');
Route::post('/submitkey', [App\Http\Controllers\SecretSantaController::class, 'SubmitKey'])->name('submitkey');
Route::post('/removekey', [App\Http\Controllers\SecretSantaController::class, 'RemoveKey'])->name('removekey');
Route::get('/logout', [App\Http\Controllers\SantaUserController::class, 'LogoutSanta'])->name('logout');