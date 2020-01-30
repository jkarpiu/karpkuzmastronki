<?php

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
    return view('home', ['title' => '']);
});

Route::get('/add', function () {
    return view('add', ['title'=> 'Dodaj']);
});

Route::get('/browse', function () {
    return view('view', ['title'=> 'Przeglądaj']);
});

Route::post('/add_send',"Bugs@add");

Route::post('users/{id}', function ($id) {

});
