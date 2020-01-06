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


Route::get('/',[
	'uses'=>'HomeController@paginaPrincipal',
	'as'=>'pagina.principal'
]);

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

	Route::resource('event','EventController');
	Route::get('event/{slug}/delete',[
		'uses'=>'EventController@destroy',
		'as'=>'events.destroy'
	]);
	Route::get('event/{slug}/post',[
		'uses'=>'EventController@post',
		'as'=>'event.post'
	]);
	Route::get('event/{slug}/unpost',[
		'uses'=>'EventController@unpost',
		'as'=>'event.unpost'
	]);

	Route::get('events/calendario',[
		'uses'=>'EventController@indexCalendar',
		'as'=>'events.calendar'
	]);

	Route::resource('album','AlbumController');
	Route::get('album/{slug}/delete',[
		'uses'=>'AlbumController@destroy',
		'as'=>'album.destroy'
	]);
	Route::get('album/{slug}/post',[
		'uses'=>'AlbumController@post',
		'as'=>'album.post'
	]);
	Route::get('album/{slug}/unpost',[
		'uses'=>'AlbumController@unpost',
		'as'=>'album.unpost'
	]);

	Route::post('album/pic/add',[
		'uses'=>'AlbumController@addPics',
		'as'=>'album.addPics'
	]);

	Route::get('album/pics/index',[
		'uses'=>'AlbumController@indexPic',
		'as'=>'album.indexPic'
	]);


});

Auth::routes();

Route::get('/panel', 'HomeController@index')->name('home');
Route::get('/{slugPage}', 'HomeController@publicPage')->name('public.page');
