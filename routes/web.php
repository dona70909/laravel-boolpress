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







/*  Route::group(['guest'],function () {
    Route::get('/', 'Guest\HomeController@index');
    Route::resource('posts','Guest\PostController');
}); */



Auth::routes();


Route::middleware('auth')
    ->namespace('Admin')
    ->prefix('admin')
    ->group( function() {
        /* 
            This route shows yhe welcome page 
         */
        Route::get('home', 'HomeController@index')
        ->name('home'); 
        Route::resource('posts','PostController');
        Route::resource('categories','CategoryController');
    });


    /* This route shows yhe welcome page  */
    Route::get('/', 'Guest\HomeController@index'); 
    Route::get('posts','Guest\PostController@index')->name('guests.posts');  
    /* contact controller */
    
    Route::get('/contacts','Guest\ContactController@create')->name('guests.contact.us'); 
    Route::post('/contacts','Guest\ContactController@store')->name('email.store'); 
    Route::get('/thanks','Guest\ContactController@thanks')->name('thanks.message');