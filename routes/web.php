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

Route::get('/email', function () {
    return new NewUserWelcomeMail();
});

Route::post('follow/{user}', 'FollowsController@store');

Route::get('/', 'PostsController@index');

Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');
Route::post('/addTrans', 'TransactionController@store');

Route::get('/p/{post}', 'PostsController@show');
Route::get('/p/{post}/{user}/edit', 'PostsController@edit')->name('post.edit');
Route::patch('/edit/{post}/{user}', 'PostsController@update')->name('post.update');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/translist', 'ProfilesController@translist')->name('profile.translist');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/profile/{user}/createTrans', 'TransactionController@createPICK');
Route::get('/profile/{user}/createTransIN', 'TransactionController@createIN');
Route::get('/profile/{user}/createTransOUT', 'TransactionController@createOUT');
Route::get('/profile/{user}/createTransDOC', 'TransactionController@createDOC');
Route::get('/profile/{user}/createTransADVANCE', 'TransactionController@createADVANCE');