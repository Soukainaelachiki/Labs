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
//     return view('index');
// });

//Route::get('/services', function(){
 //   return view('services');
//});

// Route::get('/contact', function(){
//     return view('contact');
// });

// Route::get('/blog',function(){
//     return view('blog');
// });

// Route::get('/element',function(){
//     return view('element');
// });

// Route::get('/blogPost',function(){
//     return view('blogPost');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/carousel','CarouselController');
Route::resource('/admin/users','UsersController');
Route::resource('admin/roles','RoleController');
Route::resource('admin/text','ZonetextController');
Route::resource('admin/client','ClientController');
Route::resource('admin/team','TeamController');
Route::resource('admin/service','ServiceController');
Route::resource('admin/projet','ProjetController');
Route::resource('admin/tag','TagController');
Route::resource('admin/categorie','CategorieController');
Route::resource('admin/article','ArticleController');
Route::resource('admin/newsletter','NewsletterController');
Route::resource('admin/commentaire','CommentaireController');

Route::get('/','FrontController@home')->name('home');
Route::get('/services','FrontController@service')->name('services');
Route::post('/newsletterform','FrontController@newsletterform')->name('newsletterform');
Route::get('/blog','FrontController@blog')->name('blog');
Route::post('/commentaireform/{article_id}','FrontController@commentaireform')->name('commentaireform');
Route::get('/contact','FrontController@contact')->name('contact');
Route::post('/contactform','FrontController@contactform')->name('contactform');
Route::get('/element','FrontController@element')->name('element');
Route::get('/blog-post/{article}','FrontController@blogpost')->name('blogpost');
Route::get('/blog/categorie/{id}', 'FrontController@filterCat')->name('categfiltre');
// Route::get('/blog/tag/{id}', 'FrontController@filtertag')->name('tagfiltre');