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

Route::get('/', [
    'uses' => 'ClientPageController@index',
    'as' => 'index'
]);

Auth::routes();



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/create', [
        'uses' => 'RoomController@create',
        'as' => 'create'
    ]);
    
    Route::post('/store', [
        'uses' => 'RoomController@store',
        'as' => 'store'
    ]);

    Route::get('/rooms', [
        'uses' => 'RoomController@index',
        'as' => 'rooms'
    ]);

    Route::get('/edit/{id}', [
        'uses' => 'RoomController@edit',
        'as' => 'edit'
    ]);

    Route::post('/update/{id}', [
        'uses' => 'RoomController@update',
        'as' => 'update'
    ]);

    Route::get('/reserved', [
        'uses' => 'RoomController@reserved',
        'as' => 'reserved'
    ]);
});

Route::get('/book/{id}', [
    'uses' => 'ClientPageController@book',
    'as' => 'client.book'
]);

Route::post('/reserve', [
    'uses' => 'ReservationController@store',
    'as' => 'reserve'
]);


