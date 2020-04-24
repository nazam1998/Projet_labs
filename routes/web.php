<?php

use Illuminate\Support\Facades\Auth;
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

// 

Route::get('/','WelcomeController@index')->name('welcome');
Route::get('/services','WelcomeController@service')->name('services');
Route::get('/blog','WelcomeController@blog')->name('blog');
Route::get('/contact','WelcomeController@contact')->name('contact');
Route::get('/post/{id}','WelcomeController@post')->name('post');

// Mail 

Route::post('newsletter','NewsletterController@store')->name('storenews');
Route::get('admin/newsletter','NewsletterController@index')->name('newsletter.index');
Route::get('admin/formulaire','FormulaireController@index')->name('formulaire.index');
Route::post('formulaire','FormulaireController@store')->name('storemsg');

// Comment
Route::get('admin/comment','CommentController@index')->name('comment');
Route::post('comment/{article}','CommentController@store')->name('comment.store');
Route::delete('comment/{comment}/delete','CommentController@destroy')->name('comment.destroy');

// Welcome Page
Route::resource('admin/accueil', 'AccueilController');

// Search
Route::post('search/articles','ArticleController@search')->name('search');
Route::post('search/articlesByTag/{tag}','ArticleController@searchTag')->name('searchTag');
Route::post('search/articlesByCategorie/{categorie}','ArticleController@searchCategorie')->name('searchCat');
// Ressource
Route::resource('admin/article', 'ArticleController');

Route::resource('admin/blog', 'BlogController');

Route::resource('admin/carousel', 'CarouselController');


Route::resource('admin/categorie', 'CategorieController');


Route::resource('admin/contact', 'ContactController');

Route::resource('admin/footer', 'FooterController');

Route::resource('admin/google', 'GoogleController');

Route::resource('admin/role', 'RoleController');

Route::resource('admin/service', 'ServiceController');

Route::resource('admin/user', 'UserController');

Route::resource('admin/servicepage', 'ServicepageController');

Route::resource('admin/tag', 'TagController');

Route::resource('admin/testimonial', 'TestimonialController');

Auth::routes();

// Profile
Route::get('profile','ProfileController@index')->name('profile');
Route::post('profile/submit','ProfileController@update')->name('updateProfile');
Route::post('profile/update','ProfileController@updateSelf')->name('updateProfileSelf');

// Changement
Route::get('admin/changement','ChangementController@index')->name('changement');
Route::post('admin/changement/{changement}','ChangementController@store')->name('updateChangement');
Route::get('admin/changement/{changement}/delete','ChangementController@destroy')->name('deleteChangement');

// Home
Route::get('/home', 'HomeController@index')->name('home');
