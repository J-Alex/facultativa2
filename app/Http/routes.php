<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index');
Route::auth();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/registrar', 'userController@registrar');
    Route::resource('/trabajadores', 'trabajadoresController');
    Route::post('/trabajadores/{trabajadores}', 'trabajadoresController@update');
    Route::resource('/fincas', 'fincasController');
    Route::post('/fincas/{fincas}', 'fincasController@update');
    Route::resource('/actividades', 'actividadesController');
    Route::resource('/planilla', 'planillaController');
});