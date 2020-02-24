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
    return view('root', ['title' => '']);
});

Route::post('/commadd', "Bugs@commentadd");

Route::post('/com_plus', 'Bugs@complus');

Route::post('/com_minus', 'Bugs@comminus');

Route::get('/add', function () {
    return view('add', ['title'=> 'Dodaj']);
});

Route::post('/fixedbyuser', 'Bugs@fixedByComment');

Route::post('/fixed', 'Bugs@fixed');

Route::get('/browse', "Bugs@browse");

Route::post('/add_send',"Bugs@add");

Route::get('/archive', "Bugs@archive");

Route::get('/view/{bug_id}', "Bugs@view" );

Route::get('/search', 'Bugs@search');

Route::post('users/{id}', function ($id) {

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
