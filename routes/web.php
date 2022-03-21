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

Route::redirect('/', '/dashboard');

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
})->name('dashboard');

Route::get('/buttons', function() {
    return view('pages.admin.components.buttons');
})->name('buttons');

Route::get('/cards', function() {
    return view('pages.admin.components.cards');
})->name('cards');

Route::get('/colors', function() {
    return view('pages.admin.utilities.colors');
})->name('colors');

Route::get('/borders', function() {
    return view('pages.admin.utilities.borders');
})->name('borders');

Route::get('/animations', function() {
    return view('pages.admin.utilities.animations');
})->name('animations');

Route::get('/other', function() {
    return view('pages.admin.utilities.other');
})->name('other');

Route::get('/tables', function() {
    return view('pages.admin.addons.tables');
})->name('tables');
