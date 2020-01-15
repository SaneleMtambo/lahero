<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


route::post('/uploadNewVideo', 'VideosController@addVideo');

route::post('/updateBio', 'UsersController@updateBio');

route::post('/createChannel', 'ChannelController@createChannel');


route::post('/subscibtion', 'SubscriberController@subscibtion');

route::post('/unsubscibtion', 'SubscriberController@unsubscibtion');




