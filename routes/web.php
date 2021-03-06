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
    return view('index');
});



Route:: get('home',function()
{
    return view ('index');
});

//Route::get('/', 'HomeController@index')->name('index');
Route::get('/courses', 'CoursesController@index')->name('courses');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/student', 'AboutController@student')->name('about');

Auth::routes();



Route::get('/','PropertyController@index');

