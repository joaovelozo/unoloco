<?php

/******************************************************************
 * Rotas Admin
 *****************************************************************/

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
Route::any('categorias/pesquisar', 'Admin\CategoriaController@search')->name('categorias.search');

Route::resource('/categorias', 'Admin\CategoriasController');

Route::resource('/users', 'Admin\UserController');

Route::resource('/posts', 'Admin\PostController');

 Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');

});

 
 
 

 





 /****************************************************************
  * Rotas Site
  ***************************************************************/

Route::resource('index', 'Site\HomeController');
Route::resource('about', 'Site\AboutController');
Route::get('contact', 'Site\ContactController@index');
Route::resource('valuation', 'Site\ValuationController');
Route::resource('certified', 'Site\CertificaController');
Route::resource('consult', 'Site\ConsultController');
Route::resource('juridic', 'Site\AcessoriajController');
Route::resource('suport', 'Site\AcessoriacController');
Route::resource('blog', 'Site\BlogController');





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
    return view('site.home.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
