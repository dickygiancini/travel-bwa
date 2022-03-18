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
    return view('pages.admin.dashboard');
});

Route::get('/buttons', function() {
    return view('pages.admin.buttons');
})->name('buttons');

Route::get('/cards', function() {
    return view('pages.admin.cards');
})->name('cards');
