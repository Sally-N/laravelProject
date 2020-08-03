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
 
// Route::get('/about', function () {
//    // return view('about');
// });

// Route::get('/', function () {
//    //  return view('welcome');
// });

 
// Route::get('/about', function () {
//    //  return view('about');
//  });

//  Route::get('/', 'PagesController@index');

/*
 Route::get('/about', function(){ 
    // return view('pages.about');
 });
*/

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');
 Route::get('/about', 'PagesController@about');
 Route::get('/services', 'PagesController@services');
 Route::get('posts', 'PagesController@posts');

 Route::resource('posts', 'Postscontroller');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
