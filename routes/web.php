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
    return view('start');
});

Route::get('/blog', function () {
    return view('start');
});

Route::get('/archiv', function () {
    return view('start');
});

Route::get('/ueber-uns', function () {
    return view('start');
});

Route::get('/spenden', function () {
    return view('start');
});

Route::get('/impressum', function () {
    return view('start');
});

Route::get('/item/{id}', function () {
    return view('item');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
