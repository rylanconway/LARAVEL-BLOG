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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index');

Route::get('/post' , 'PostsController@index')->name('home');

Route::get('/posts/create' , 'PostsController@create');
Route:: get('/post/delete' , 'PostsController@delete');
Route:: post('/posts' , 'PostsController@store');
Route::get('/posts/{id}' , 'PostsController@show');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/confirmation/{token}', 'Auth\RegisterController@confirmation')->name('confirmation');

Route::get('/manage', 'userManager@index');
Route::get('/theme', 'themeManager@index');
Route::get('/createtheme', 'themeManager@create');

Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');



Route::get('/themelist/update', 'themeManager@update');
Route::get('/themelist/delete', 'themeManager@delete');
Route::get('/themelist/save', 'themeManager@save');
Route::get('/themelist/add', 'themeManager@add');


Route::get('/userlist/delete', 'userManager@delete');
Route::get('/userlist/update', 'userManager@update');
Route::get('/userlist/save', 'userManager@save');



Route::get('/selecttheme' , 'themeSelect@index');
Route::get('/themeset/update', 'themeSelect@update');




