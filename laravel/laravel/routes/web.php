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
    return view('welcome');
});

            //url
Route::get('/contato', function () {
    return view('contato');
});              // VIEW    


Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/Pagina', function () {
    return view('Pagina');
});

Route::get('/pagina2', function () {
    return view('pagina2');
});