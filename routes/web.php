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

/*Route::get('/enlist', ['middleware' =>'guest', function(){
  return view('enlist');
}]);*/

Route::group(['prefix' => 'misadduadmin'], function () {

    Auth::routes();

});

Route::get('home', 'HomeController@index')->name('home');
Route::get('programs', 'ProgramController@index');
Route::post('programs/create','ProgramController@create');
Route::get('programs/all','ProgramController@all');

Route::get('enlist', 'EnlistController@index');
Route::post('enlist/create', 'EnlistController@create');
Route::get('enlist/allenlistment', 'EnlistController@allin');
Route::get('enlist/all', 'EnlistController@all');
//Route::get('/enlist', 'EnlistController@index')->middleware('can');
