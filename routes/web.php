<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/oracao-purificacao-parte-1', function () {
    return view('oracao-purificacao-parte-1');
});
Route::get('/oracao-purificacao-parte-2', function () {
    return view('oracao-purificacao-parte-2');
});
