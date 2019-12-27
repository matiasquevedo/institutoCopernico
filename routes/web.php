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
    return view('welcome');
});

Route::get('perfil',[
	'uses'=>'UserController@show',
	'as'=>'user.perfil'
]);

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function(){

	Route::resource('user','UserController');
	Route::get('user/{email}/delete',[
		'uses'=>'UserController@destroy',
		'as'=>'user.destroy'
	]);

	Route::resource('page','PageController');
	Route::get('page/{slug}/delete',[
		'uses'=>'PageController@destroy',
		'as'=>'pages.destroy'
	]);
	Route::get('page/{slug}/post',[
		'uses'=>'PageController@post',
		'as'=>'page.post'
	]);
	Route::get('page/{slug}/unpost',[
		'uses'=>'PageController@unpost',
		'as'=>'page.unpost'
	]);

});

Auth::routes();

Route::get('/panel', 'HomeController@index')->name('home');
Route::get('/{slugPage}', 'HomeController@publicPage')->name('public.page');
