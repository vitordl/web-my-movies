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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'Main@index')->name('index');

Route::get('/series', 'Main@series')->name('series');

Route::get('/show/{id?}', 'Main@show')->name('show');

Route::post('/pesquisa', 'Main@pesquisa')->name('pesquisa');

Route::get('/sobre', function(){
    return view('about');
})->name('sobre');

Route::get('/servicos', function(){
    return view('servicos');
})->name('servicos');

//Route::get('/showMovie/{id?}', 'Main@show')->name('showMovie');