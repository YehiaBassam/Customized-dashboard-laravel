<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/mydashboard' , 'PostController@index')->name('posts.index');
    Route::get('/mydashboard/search', 'PostController@liveSearch')->name('posts.search');

    
    Route::get('/mydashboard/create' , 'PostController@create')->name('posts.create');
    Route::post('/mydashboard' , 'PostController@store')->name('posts.store');
    
    Route::get('/mydashboard/{post}/edit' , 'PostController@edit')->name('posts.edit');
    Route::put('/mydashboard/{post}' , 'PostController@update')->name('posts.update');
    
    Route::delete('/mydashboard/{post}' , 'PostController@destroy')->name('posts.destroy');

    Route::get('/mydashboard/contactus','Dashboard\ContactUsController@create')->name('contact.create');
    Route::post('/mydashboard/contactus','Dashboard\ContactUsController@store')->name('contact.store');

    Route::get('/mydashboard/{post}' , 'PostController@show')->name('posts.show');

});



