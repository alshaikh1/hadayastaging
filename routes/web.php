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
*/
Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name.' with an id of '.$id;
});


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/search', 'PagesController@search');
Route::get('/add', 'PagesController@add');
Route::get('/howto', 'PagesController@howto');
Route::get('/contact', 'PagesController@contact');
Route::get('/faqs', 'PagesController@faqs');
//Route::get('/alreadyregistered', 'PagesController@recordexist');
Route::post('/search', 'PagesController@search');
Route::get('/eventdetails/{id}', 'PagesController@eventdetails');
Route::get('/purchase/{occ_id}/{product_id}', 'PagesController@purchase');

Route::post('/thankyou/{occ_id}/{productid}', 'PagesController@email');
Route::post('/occasionconfirmation', 'PagesController@occasionconfirmation');


Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/addtocart/{id}', 'PagesController@addtocart');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
