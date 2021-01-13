<?php

Route::get('/index', '\Xinyujian\Wchat\Http\Controllers\IndexController@index');

Broadcast::channel('wchat', function () {
    return 'Hello world!';
});

Route::get('test-broadcast', function(){
    broadcast(new \Xinyujian\Wchat\Events\WchatEvent('Hello World!'));
});