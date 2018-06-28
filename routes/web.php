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

Route::get('/', function () {
    return view('index');
});

Route::get('/services', function(){
    return view('services');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/blog',function(){
    return view('blog');
});

Route::get('/element',function(){
    return view('element');
});

Route::get('/blogPost',function(){
    return view('blogPost');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route ::resource('/admin/carousel','CarouselController');


