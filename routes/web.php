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
    return view('welcome');
});

Auth::routes();

Route::get('/search',"HomeController@Search");
Route::get('/home', 'HomeController@index');
Route::resource('/faculty', 'FacultyController');
Route::resource('/category', 'CategoryController');
Route::resource('/book', 'BookController');
Route::resource('/profile', 'ProfileController');
Route::resource('/role', 'RoleController');
Route::resource('/permission', 'PermissionController');
Route::resource('user', 'UserController');


Route::get('/register/{register}', 'ProfileController@register');

Route::resource('/reader', 'EbookController');
Route::get('kategory_ebook/{ebook}', 'EbookController@kategory');


Route::resource('video', 'VideoController');
Route::get('kategory_video/{video}', 'VideoController@kategory');


Route::get('/home', 'EbookController@index');

// Route::group(['middleware' => ['isVerified']], function () {
// 	return view('email');

// Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');
// Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');
// });