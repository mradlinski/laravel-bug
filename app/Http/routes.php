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

Route::get('/withoutAtParent', function () {
    return view('child', ['testInput' => 'Just some test input.']);
});

Route::get('/withAtParent', function () {
    return view('child', ['testInput' => '@parent']);
});
