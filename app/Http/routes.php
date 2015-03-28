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

Route::get('/', 'WelcomeController@index');

// Chat Rooms

Route::get('/api/chat-rooms', array('uses' => 'ChatRoomController@getAll'));
Route::post('/api/chat-rooms', array('uses' => 'ChatRoomController@create'));

// Messages api

Route::get('/api/messages/{chatRoom}', array('uses' => 'MessageController@getByChatRoom'));
Route::post('/api/messages/{chatRoom}', array('uses' => 'MessageController@createInChatroom'));
Route::get('/api/messages/{lastMessageId}/{chatRoom}', array('uses' => 'MessageController@getUpdates'));

// Users api

Route::get('/api/users/login/guillermo', array('uses' => 'UserController@loginGuillermo'));
Route::get('/api/users/login/david', array('uses' => 'UserController@loginDavid'));

Route::bind('chatRoom', 'ChatRoom');
