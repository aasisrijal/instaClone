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
use App\Mail\NewUserWelcomeMail;

Auth::routes();
Route::get('/email', function(){
    return new NewUserWelcomeMail();
});

Route::post('/follow/{user}', 'FollowController@store');

Route::get('/post/create', 'PostController@create');
Route::get('/', 'PostController@index'); 
Route::post('/post', 'PostController@store');
Route::get('/post/{post}', 'PostController@show');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');


