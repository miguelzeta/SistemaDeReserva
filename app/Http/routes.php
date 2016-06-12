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



Route::get('/',function(){
    return view('welcome');
});

Route::auth();
Route::get('/home','HomeController@index');

Route::group(['prefix'=>'admin','middleware'=>['auth','is_admin']],function(){
    Route::get('/','AdminController@index');
});
Route::group(['prefix'=>'client','middleware'=>['auth','is_client']],function(){
    Route::get('/','AdminController@create');
});
Route::group(['prefix'=>'medic','middleware'=>['auth','is_medic']],function(){
    Route::get('/','AdminController@show');
});



/*

Route::group(['middleware'=>['web']],function(){

    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', 'HomeController@index');



    Route::group(['prefix'=>'Administrador'], function(){

        Route::get('Admin', function() {
            return view('Administrador.app');
        });
    });


    Route::group(['prefix'=>'Medico'], function(){
        Route::resource('Medic','MedicController');

        Route::get('Medic/{RutUsuario}/destroy',[
            'uses'=>'MedicController@destroy',
            'as'=>'Medico.Medic.destroy'
        ]);
    });


    Route::group(['prefix'=>'Cliente'], function(){
        Route::resource('User','UsersController');

        Route::get('User/{RutUsuario}/destroy',[
            'uses'=>'UsersController@destroy',
            'as'=>'Cliente.User.destroy'
        ]);
    });



    Route::resource('Admin','MedicController');


});
*/

