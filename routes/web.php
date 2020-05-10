<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::group(['middleware' => ['web']], function() {
    Route::resource('/words', 'WordController');
});

Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
Route::get('users/{user}/edit/password',  'UserController@editPassword');
Route::post('users/edit/password/update','UserController@updatePassword');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'SearchController@search');
Route::get('/common-dictionary/search', 'SearchController@commonSearch');
Route::get('/common-dictionary', 'WordController@commonIndex');
Route::get('/common-dictionary/{id}', 'WordController@commonShow');
Route::get('/common-dictionary/{id}/add', 'WordController@add');
