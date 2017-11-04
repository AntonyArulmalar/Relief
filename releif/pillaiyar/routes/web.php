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

use App\member;
use App\resource;
use App\transport;

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

Route::get('/forms/project/submit', function () {
    return view('forms/project');
});

Route::get('/forms/member/submit', function () {
    return view('forms/member');
});

Route::get('/forms/resource/submit', function () {
    return view('forms/resource');
});

Route::get('/forms/transport/submit', function () {
    return view('forms/transport');
});


Route::post('/forms/project/submit', 'projectController@submit');

Route::post('/forms/member/submit', 'memberController@submit');

Route::post('/forms/resource/submit', 'resourceController@submit');

Route::post('/forms/transport/submit', 'transportController@submit');






Route::get('/details/memberdetails', function()
{
    return View::make('/details/memberdetails')->with('members', member::all());
});
Route::get('/details/transportdetail', function()
{
    return View::make('/details/transportdetail')->with('transports', transport::all());
});
Route::get('/details/resourcesdetail', function()
{
    return View::make('/details/resourcesdetail')->with('resources', resource::all());
});
/*Route::get('/details/memberdetails/edit/{id}', 'memberController@edit')->name('/details/memberdetails/edit');
Route::post('/details/memberdetails/update/{id}', 'memberController@update')->name('/details/memberdetails/update');*/
//Route::get('/details/memberdetails/delete/{id}', 'memberController@delete')->name('/details/memberdetails/delete');
//Route::get('/details/memberdetails','memberController@retrieve');

Route::get('/details/memberdetails/delete/{id}', 'memberController@delete')->name('/details/memberdetails');
Route::get('/details/transportdetail/delete/{id}', 'transportController@delete')->name('/details/transportdetail');
Route::get('/details/resourcesdetail/delete/{id}', 'resourceController@delete')->name('/details/resourcesdetail');





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('user',['as' => 'user', 'uses' =>'Auth\LoginController@getUsers']);

