<?php

use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

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

/*
Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name.' with an id of '.$id;
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/search', 'PagesController@search');
Route::get('/addstep1', 'PagesController@addstep1');
Route::post('/addstep1', 'PagesController@postCreateStep1');
Route::get('/addstep2', 'PagesController@addstep2');

Route::get('/howto', 'PagesController@howto');
Route::get('/contact', 'PagesController@contact');
Route::get('/faqs', 'PagesController@faqs');
//Route::get('/alreadyregistered', 'PagesController@recordexist');
Route::post('/search', 'PagesController@search');
//Route::post('/search', function(Request $request){ dd($request);});

Route::get('/eventdetails/{id}', 'PagesController@eventdetails');
Route::get('/purchase/{occ_id}/{product_id}', 'PagesController@purchase');

Route::post('/thankyou/{occ_id}/{productid}', 'PagesController@email');
Route::post('/occasionconfirmation', 'PagesController@occasionconfirmation');
Route::get('/cart', 'PagesController@cart');
Route::get('/addstep3', 'PagesController@cart');

Route::get('/addstep2/{producttype}/{id}', 'PagesController@addToCart');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

