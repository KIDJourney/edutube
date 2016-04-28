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


Route::group(['middleware' => 'web'], function () {
//    Route::auth();

    Route::get('/', 'User\HomeController@index');

    Route::resource('/video','User\VideoController',
        ['only'=>['index','show']]);

    Route::resource('/user','User\UserController');
    Route::resource('/teacher','User\TeacherController');
    Route::resource('/series','User\SeriesController');

    Route::get('/upload', 'Admin\VideoController@index');
    Route::get('/callback','Admin\VideoController@callback');

});
