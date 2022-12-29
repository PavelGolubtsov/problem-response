<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController');

Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', 'AdminController');
    Route::resource('/categories', 'CategoryController');
    Route::get('/restore', 'CategoryController@restore')->name('categories.restore');
    Route::post('/restore/{category}', 'CategoryController@unDelete')->name('categories.unDelete');
});
