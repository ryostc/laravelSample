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
    return "<html><body><h1>ルートです</h1></body></html>";
});

Route::get('/a', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "<html><body><h1>Test</h1></body></html>";
});
