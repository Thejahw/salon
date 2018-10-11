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

Route::get('/search','SearchController@search');
Route::get('/profile', 'SearchController@view')->name('view');

Route::get('/filter','SearchController@typeFilter');

Route::get('/sort','SearchController@sortInLocaation');

Route::get('/details','profileController@viewData');