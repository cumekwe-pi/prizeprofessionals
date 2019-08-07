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

Route::get('/',  ['uses' => 'PageController@index',   'as' => 'index']);
Route::get('/services',  ['uses' => 'PageController@services',   'as' => 'services']);
Route::get('/partners',  ['uses' => 'PageController@partners',   'as' => 'partners']);
Route::get('/request-quote',  ['uses' => 'PageController@requestQuote',   'as' => 'requestQuote']);
Route::get('/contact',  ['uses' => 'PageController@contact',   'as' => 'contact']);
Route::get('/claim-a-prize',  ['uses' => 'PageController@claimPrize',   'as' => 'claimPrize']);
Route::get('/prize-sourcing',  ['uses' => 'PageController@prizeSourcing',   'as' => 'prizeSourcing']);
