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
Route::get('/home', function() {
    return view('home');
});
Route::get('/home/index', function() {
    return view('home.index');
});
Route::get('/msg/{id?}', 'MsgController@index');
Route::get('/queryStr', 'QueryStrController@index');
Route::get('/hello', 'HelloController');
Route::get('/sample', 'SampleController@index');
Route::get('/sample/test/{no?}', 'SampleController@test');
Route::get('/req', 'ReqController@index');

