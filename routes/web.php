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
    return view('fixas.home');
});

Route::get('/ingles', function () {
    return view('cursos.ingles');
});

Route::get('/espanhol', function () {
    return view('cursos.espanhol');
});

Route::get('/portugues', function () {
    return view('cursos.portugues');
});

Route::get('/sobrenos', function () {
    return view('fixas.sobrenos');
});

Route::get('/traducao', function () {
    return view('fixas.servicos');
});

