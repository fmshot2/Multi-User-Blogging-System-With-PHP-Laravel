<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'Auth\\LoginController@login')->name('login');
Route::post('register', 'Auth\\RegisterController@register')->name('register');

Route::get('logout', 'Auth\\LoginController@logout')->name('logout');

Route::get('check-auth', 'Auth\\LoginController@checkAuth')->name('logout');

//Route::resource('categories', 'CategoryController');
 
 //Category routes
Route::post('categories/store', 'CategoryController@store');

Route::get('categories/singleCategory/{id}', 'CategoryController@show');

Route::post('categories/editSingleCategory/{id}', 'CategoryController@update');

Route::post('categories/deleteSingleCategory/{id}', 'CategoryController@destroy');


Route::resource('posts', 'PostsController');

Route::resource('tags', 'TagsController');

Route::resource('comments', 'CommentsController');

Route::get('profile', 'UsersController@profile');
Route::resource('users', 'UsersController');