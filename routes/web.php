<?php

use App\Http\Controllers\SimpleLoginController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authentication', '\App\Http\Controllers\BasicLoginController@index')->name('auth.login');
Route::post('/authentication/process', '\App\Http\Controllers\BasicLoginController@authentication')->name('auth.process');
Route::get('/dashboard', '\App\Http\Controllers\DashboardController@index')->name('auth.dashboard');
// Route::get('/login', [SimpleLoginController::class, 'index'])->name('auth.login');
