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

Route::get('/', function () {
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout'])->name('logout');


Route::group(['prefix' => 'company'], function () {
    Route::get('/', [\App\Http\Controllers\CompanyController::class, 'index'])->name('company.index');
    Route::get('/add', [\App\Http\Controllers\CompanyController::class, 'create'])->name('company.create')->middleware('auth');
    Route::post('store', [\App\Http\Controllers\CompanyController::class, 'store']);
});

Route::group(['prefix' => 'policy'], function () {
    Route::get('/', [\App\Http\Controllers\PolicyController::class, 'index'])->name('policy.index');
    Route::get('/add', [\App\Http\Controllers\PolicyController::class, 'create'])->name('policy.create')->middleware('auth');
    Route::post('store', [\App\Http\Controllers\PolicyController::class, 'store']);
});
