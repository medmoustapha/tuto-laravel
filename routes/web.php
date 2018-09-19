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
// Route::group(['prefix'=>'admin','middleware'=>'ip'],function(){
//     Route::get('salut',function(){
//         return 'salut le gent';
//     });
// });
// Route::get('/', function () {
//     return view('welcome');
// });

 //Route::get('/','WelcomeController@index');
 Route::resource('news','PostsController');
 Route::resource('cat','CategoriesController');
 //Route::post('news.index','PostsController@serchTitle');
 
 //Route::resource('link','LinksController');
 Route::get('links/','LinksController@create');

 Route::post('links/','LinksController@store');
 Route::get('r/{id}','LinksController@show')->where('id','[0-9]+');

//  Route::controllers([
//      'auth'=>'Auth\LongController',
//      'password'=>'Auth\ResetPasswordController',
//  ]);
//Route::ressource('auth', 'Auth\RegisterController@create');