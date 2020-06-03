<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'administracion'], function () {
        // LEER
    Route::get('/leer/{param?}','Administracion\ReadController@index');

     // PO
    Route::post('/insertar/{param?}', 'Administracion\CrearController@index');
    
     // Third Route
     Route::get('/test', function () {
     return '';
     });
     });
    
