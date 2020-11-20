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

Route::get('/post', 'AdminController@Index');

Route::post('/saveposts', 'AdminController@store')->name('savepost');


Route::get('/', function(){
	return view('welcome');
});

Route::get('/app', function(){
	return view('layouts.app');
});

Route::get('/addcategory', 'AdminController@Category')->name('addCategory');

Route::post('/storecategory', 'AdminController@store_category')->name('storecategory');

/*
აიდი - pk
სათაური
აღწერა
მოკლე აღწერა
სურათი
დამატების თარიღი
თაიმსტემპები
მომხმარებლის აიდი
კატეგორიის აიდი 

--------
კატეგორია
აიდი - pk
სათაური

--------
თეგები
აიდი - pk
ნიუს აიდი - fk
სახელი

-------
ავტორიზაცია
*/

Auth::routes(["verify"=>true]);

Route::get('/home', 'HomeController@index')->name('home');
