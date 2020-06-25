<?php

use Illuminate\Support\Facades\Route;
use App\job;

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
    return view('welcome', ['count' => DB::table('job')->count()]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/joblist', 'JoblistController@index');
Route::get('/create', 'JobController@create');

Route::resource('joblist','JoblistController');
Route::post('/job/create', 'JobController@store');

Route::get('lang/{locale}','LanguageController');

Route::get('/user/{id}', 'UserController@profile')->name('user.profile');
Route::get('/user/{id}/joblist', 'UserController@joblist')->name('user.joblist');

Route::get('/delete/{id}', 'JobController@destroy');
Route::get('/edit/{id}', 'JobController@edit');
Route::post('/update', 'JobController@update');