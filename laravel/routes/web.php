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
    // App\Configuration::create([ 'key' => 'copyright', 'value' => 'TODOS LOS DERECHOS RESERVADOS. CASAVIOLETA* 2018' ]);
    return view('welcome', ['title' => 'All pages']);
});

Route::get('/', 'HomeController@show');

Route::get('/quienes', function () {
    return view('welcome', ['title' => 'Home']);
});

Route::get('/producto/{productName}/{productId}', 'ProductController@showProduct');
Route::get('/productos', 'ProductController@showProducts');
Route::get('/seccion/{categorySeo}', 'ProductController@showCategoryProducts');

/** ADMIN */
Route::any('/admin', 'BackendPageController@showHome');
Route::get('/admin/login', 'BackendPageController@showLogin');
Route::post('/admin/login', 'BackendPageController@login');





Route::get('/admin/{entityName}', 'BackendPageController@listing');
Route::get('/admin/{entityName}/{id}', 'BackendPageController@crud');
Route::post('/admin/{entityName}/{id}', 'BackendPageController@save');
Route::post('/admin/product', 'BackendPageController@createProduct');



Route::any('/{pageName}', 'StaticPageController@show');
