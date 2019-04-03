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

Route::get('/quienes', function () {
    return view('welcome', ['title' => 'Home']);
});

Route::get('/producto/{productId}', 'ProductController@showProduct');
Route::get('/{pageName}', 'StaticPageController@show');