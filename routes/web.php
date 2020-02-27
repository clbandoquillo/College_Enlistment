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

Route::resource('/student_enlistment', 'EnlistController');
//JSON Lists
Route::get('/citieslist','CityController@cities');
Route::get('/countrieslist','CountriesController@countries');
Route::get('/nationalitylist','NationalityController@nationalities');
Route::get('/provinceslist','ProvinceController@provinces');
Route::get('/religionlist','ReligionController@religions');
Route::get('/schoolslist','SchoolController@schools');
Route::get('/programslist','ProgramController@programs');

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/{any}', 'SpaController@index')->where('any', '.*');

/*Route::get('/enlist', ['middleware' =>'guest', function(){
  return view('enlist');
}]);*/
/*
Route::group(['middleware' => ['superadmin']], function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
});

/*Route::middleware(['guest', 'member', 'admin'])->group( function () {
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});*/
Route::group(['middleware' => 'superadmin'],function () {

    Auth::routes();

});

Route::group(['middleware' => 'guest', 'admin', 'member'], function () {

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

});

Auth::routes();

//Home
Route::get('home', 'HomeController@index')->name('home');

//Programs
Route::get('programs', 'ProgramController@index');
Route::post('programs/create','ProgramController@create');
Route::get('programs/all','ProgramController@all');
Route::get('programs/program_choice_counter','ProgramController@program_choice_counter');

//Enlist
Route::get('enlist', 'EnlistController@index');
Route::post('enlist/create', 'EnlistController@create');
Route::get('enlist/allenlistment', 'EnlistController@allin');
Route::get('enlist/all', 'EnlistController@all');

//Divisions
Route::get('divisions', 'DivisionController@index');
Route::post('divisions/create','DivisionController@create');
Route::get('divisions/all','DivisionController@all');

