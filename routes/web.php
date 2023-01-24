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
Route::post('addcontact', [App\Http\Controllers\ContactusController::class, 'store']);





Route::group(['middleware' => ['auth']], function () {
    Route::controller(\App\Http\Controllers\MinsectionController::class)->group(function () {
        Route::get('minsection', 'index');
        Route::put('update', 'update');
    });

    Route::controller(\App\Http\Controllers\AboutusController::class)->group(function () {
        Route::get('aboutus', 'index');
        Route::put('updateaboutus', 'update');
    });


    Route::resource('services', 'App\Http\Controllers\ServicesController');
    Route::resource('blog', 'App\Http\Controllers\BlogController');
    Route::resource('contact', 'App\Http\Controllers\ContactusController');
    Route::resource('setting', 'App\Http\Controllers\SettingsController');
});




Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
