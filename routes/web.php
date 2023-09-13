<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\ClientController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/panel', function () {
    return view('backend.admin.pages.index');
});

Route::get('/panel2', function () {
    return view('backend.advisor.pages.index');
});

Route::resource('advisors', AdvisorController::class);

Route::resource('users', UserController::class);

Route::get('/clients', 'ClientController@index')->name('clients.index');
