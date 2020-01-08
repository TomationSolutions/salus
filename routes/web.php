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
    return view('front.home');
});

// Route::get('/dashboard', function () {
//     return view('back.dashboard');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('admin.personal')->middleware('is_admin');
Route::get('/admin/dashboard', 'HomeController@admin')->name('admin.home')->middleware('is_admin');
Route::get('/dashboard', 'HomeController@admincompany')->name('admin.company')->middleware('is_admin');

// pages

Route::get('/dependant', 'DependantsController@index')->name('dependant')->middleware('is_admin');
Route::get('/adddependants', 'DependantsController@create')->name('adddependents')->middleware('is_admin');



