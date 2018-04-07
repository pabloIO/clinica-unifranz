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
Route::get('/campanas', function(){
  return view('campanas');
});
Route::get('/quien-somos', function(){
  return view('quien');
});
Route::get('/servicios', function(){
  return view('servicios');
});
Route::get('/consulta', function(){
  return view('formulario_reserva');
});
Route::get('/admin', function(){
  return view('login');
});

Route::prefix('admin')->group(function(){
  Route::get('/dashboard', function(){
    return view('admin.dashboard');
  });
});

Route::prefix('api/v1')->group(function(){
  Route::get('/form-data', [
    'uses'  => 'ReserveRegisterCtrl@getFormStaticData',
  ]);
  Route::post('/register', [
    'uses'  => 'ReserveRegisterCtrl@register',
  ]);
  Route::get('/new', [
    'uses'  => 'AdminCtrl@newAdmin',
  ]);
  Route::post('/login', [
    'uses'  => 'AdminCtrl@login',
  ]);
  Route::get('/reserves', [
    'uses'  => 'ReserveRegisterCtrl@getReserves',
  ]);
});
