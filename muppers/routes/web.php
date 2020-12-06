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
    return view('home');
});

Route::get('/nuestros-clientes', function () {
    return view('patterns');
});

Route::get('/sobre-nosotros', function () {
    return view('sobre_nosotros');
});

Route::get('/Contacto', function () {
    return view('contacto');
});

Route::view('/contacto','contacto')->name('contacto');

Route::post('contacto','ContactController@store');
