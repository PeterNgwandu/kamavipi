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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Admin Routes
Route::get('/admin', 'AdminController@index')->name('/admin');
Route::get('/admin/content/create', 'AdminController@create')->name('content.create');
Route::post('/admin/content/create', 'AdminController@createContent')->name('create');
Route::get('/admin/add/episodes/{id}', 'AdminController@addEpisodes')->name('episodes');
Route::post('/admin/add/episodes', 'AdminController@createEpisode')->name('add-episodes');
Route::get('/admin/manage/category', 'ManageCategoryController@index')->name('cat-tag');
Route::post('/admin/create', 'ManageCategoryController@store')->name('category');
Route::get('category/{id}', 'ManageCategoryController@destroy');

Route::get('/', 'MoviesController@index')->name('home');
Route::get('/movie/movie-detail', 'MoviesController@show');
Route::get('/movies/new-movies', 'MoviesController@showNewMovies');
Route::get('/movies/movie-list', 'MoviesController@showMoviesList');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/movie/stream/{id}', 'MoviesController@streamMovie');
Route::get('/movie/stream/single-movie/{id}', 'MoviesController@streamMovieSingle');
