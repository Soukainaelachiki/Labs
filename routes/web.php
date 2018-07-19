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

Route::resource('/admin/carousel','CarouselController')->middleware('can:admin');
Route::resource('/admin/users','UsersController')->middleware('can:admin');
Route::resource('admin/roles','RoleController')->middleware('can:admin');
Route::resource('admin/text','ZonetextController')->middleware('can:admin');
Route::resource('admin/client','ClientController')->middleware('can:admin');
Route::resource('admin/team','TeamController')->middleware('can:admin');
Route::resource('admin/service','ServiceController')->middleware('can:admin');
Route::resource('admin/projet','ProjetController')->middleware('can:admin');
Route::resource('admin/tag','TagController')->middleware('can:admin');
Route::resource('admin/categorie','CategorieController')->middleware('can:admin');
Route::resource('admin/article','ArticleController');
Route::resource('admin/newsletter','NewsletterController')->middleware('can:admin');
Route::resource('admin/commentaire','CommentaireController');
Route::resource('article/validation','ValidationController');
Route::resource('commentaire/validation1','CommentValidationController');

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
Route::get('/blog/tag/{id}', 'FrontController@filtertag')->name('filtertag');
Route::get('/blog/barrederecherche','FrontController@filtertitle')->name('filtertitle');