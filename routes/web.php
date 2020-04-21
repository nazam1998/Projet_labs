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

Route::get('/','WelcomeController@index')->name('welcome');
Route::get('/services','WelcomeController@service')->name('services');
Route::get('/blog','WelcomeController@blog')->name('blog');
Route::get('/contact','WelcomeController@contact')->name('contact');
Route::get('/post/{id}','WelcomeController@post')->name('post');
Route::post('newsletter','NewsletterController@store')->name('storenews');
Route::post('admin/newsletter','NewsletterController@index')->name('newsletter.index');


Route::resource('admin/accueil', 'AccueilController');

Route::post('search/articles','ArticleController@search')->name('search');
Route::resource('admin/article', 'ArticleController');

Route::resource('admin/blog', 'BlogController');

Route::resource('admin/carousel', 'CarouselController');

Route::resource('admin/categorie', 'CategorieController');

Route::resource('admin/comment', 'CommentController');

Route::resource('admin/contact', 'ContactController');

Route::resource('admin/footer', 'FooterController');

Route::resource('admin/google', 'GoogleController');

Route::resource('admin/role', 'RoleController');

Route::resource('admin/service', 'ServiceController');

Route::resource('admin/servicepage', 'ServicepageController');

Route::resource('admin/tag', 'TagController');

Route::resource('admin/testimonial', 'TestimonialController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
