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
    return view('welcome');
});

Route::get('/gamelist-simple', function () {
    return view('gamelist-simple');
});

// Route::get('/{name}', 'GamelistController@demo')->middleware('demo');
Route::get('/{name}', 'GamelistController@demo')->where('name', 'demo|settings|list|table');

// TODO: Роуты чисто для верстки, чтобы брать из нее компоненты, в последствии роуты нужно удалить

Route::get('/markup-1', function () {
    return view('markup.demo');
});
Route::get('/markup-2', function () {
    return view('markup.settings');
});
Route::get('/markup-3', function () {
    return view('markup.settings-with-popup');
});
Route::get('/markup-4', function () {
    return view('markup.list-mode');
});
Route::get('/markup-5', function () {
    return view('markup.table-mode');
});
