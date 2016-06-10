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





Route::group(['middleware'=>['web']],function(){

    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', 'HomeController@index');



    Route::group(['prefix'=>'Administrador'], function(){
        Route::resource('Admin','AdminController');
    });

    Route::group(['prefix'=>'Medico'], function(){
        Route::resource('Medic','MedicController');
    });
    Route::group(['prefix'=>'Cliente'], function(){
        Route::resource('User','UsersController');
    });
});

//Route::get('editar/{id}','UsersController@edit');
//Route::post('update/{id}','UsersController@update');
/*
  Route::get('administrador', function (){
      return view('Administrador.app');
  });

Route::get('cliente', function (){
      return view('Cliente.app');
  });
 Route::group(['prefix'=>'Cliente'], function(){
        Route::resource('User','UsersController');
    });
  Route::get('medico', function (){
      return view('Medico.app');
  });*/
