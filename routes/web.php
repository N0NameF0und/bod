<?php

use App\Http\Controllers\DashboardController;
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


Route::get('/login', function () {
    return view('Login');
});

/* Route::get('/dashboard', function () {
    return view('Dashboard');
}); */

 Route::get('dashboard/{clase?}',"DashboardController@index");

 Route::get('login',  'IngresoController@index');

  Route::post('autenticacion', 'IngresoController@login');

  Route::get('logout', 'IngresoController@logout');

  Route::get('inicio', function(){
      return view('Inicio') ;
  });

  Route::get('contactos', function(){
    return view('Contactos') ;
});