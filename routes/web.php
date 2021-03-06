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
    return view('pages.visitor.index');
})->name('welcome');

Route::get('/detail', function () {
    return view('pages.visitor.detail');
})->name('detail');

Route::as('admin.')->group(function() {

    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('buttons', [\App\Http\Controllers\Admin\DashboardController::class, 'buttons'])->name('buttons');
    Route::get('cards', [\App\Http\Controllers\Admin\DashboardController::class, 'cards'])->name('cards');

    Route::get('colors', function() {
        return view('pages.admin.utilities.colors');
    })->name('colors');

    Route::get('borders', function() {
        return view('pages.admin.utilities.borders');
    })->name('borders');

    Route::get('animations', function() {
        return view('pages.admin.utilities.animations');
    })->name('animations');

    Route::get('other', function() {
        return view('pages.admin.utilities.other');
    })->name('other');

    Route::get('tables', function() {
        return view('pages.admin.addons.tables');
    })->name('tables');
});

