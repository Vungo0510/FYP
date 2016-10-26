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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');

//Route::get('/update', ['middleware' => 'auth', 'uses=>UserController@index', function() {
	//return view('usermanage.updateInfo');
//}]);

//Route::resource('users', 'UserController');

Route::group(['middleware' => ['auth','admin']], function() {
	Route::get('/update', 'UserController@index');
	Route::get('users/{id}', 'UserController@update');
});

Route::get('/library', 'LibraryController@show_library');