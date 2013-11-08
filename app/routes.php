<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Event::listen('404', function(){
    return View::make('error/404');
});

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('users', function()
{
    return View::make('users');
});

Route::get('users/add', 'UserController@add');

/*Map controller*/
Route::get('map', 'MapController@getIndex');

/*NSO Planner*/
Route::get('nso', 'NSOController@getIndex');

/*NSO Planner*/
Route::get('stores', 'StoreController@getIndex');
Route::get('store/view/{id?}',  array('uses' => 'StoreController@view'))->where('id', '[0-9]+');

/*People Contoller*/
Route::get('people',                'PeopleController@getIndex');
Route::get('people/view/{id?}',     array('uses' => 'PeopleController@view'))->where('id', '[0-9]+');
Route::get('people/compare',        'PeopleController@compareSelected');
Route::get('people/view/{id?}/add/{listid?}', array('uses' => 'PeopleController@addSingletoList'))->where('id', '[0-9]+');
Route::get('people/add',            'PeopleController@addGrouptoList');
Route::post('people/savenotes',     'PeopleController@addNote');

/*Lists*/
Route::get('lists',               'ListController@getIndex');
//Route::get('list/view/{id}',    'ListController@openList');
Route::get('list/view/{id?}', array('uses' => 'ListController@openList'))->where('id', '[0-9]+');


//Route::controller('list');
Route::post('list/new',          'ListController@addList');
Route::get('list/delete/{id?}',   'ListController@deleteList');
Route::get('list/rename/{id}',   'ListController@renameList');
Route::get('list/send/{id}',     'ListController@emailList');
Route::get('list/print/{id}',    'ListController@printList');

/*Districts*/
Route::get('districts',               'DistrictController@getIndex');
