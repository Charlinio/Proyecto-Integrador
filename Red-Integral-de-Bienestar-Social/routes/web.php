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
    return view('index');
});

Route::get('/admin', function() {
  return view('plantilla');
});
Route::get('/admin/actas', function() {
  return view('actas');
});
Route::get('/admin/eventos', function() {
  return view('eventos');
});
Route::get('/admin/usuarios', function() {
  return view('usuarios');
});
Route::get('/admin/publicar', function() {
  return view('publicar');
});
Route::get('/admin/finanzas', function() {
  return view('finanzas');
});
