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
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/seller', function () {
	if(Auth::check() && Auth::user()->role == 'seller'){
		return view('userView/seller');
	}
	return redirect('/home');
});

Route::get('/admin', function () {
	if(Auth::check() && Auth::user()->role == 'admin'){
		return view('userView/admin');
	}
	return redirect('/home');
});

Route::get('/super_admin', function () {
	if(Auth::check() && Auth::user()->role == 'super_admin'){
		return view('userView/superAdmin');
	}
	return redirect('/home');
});

// post routes
Route::post('/register-user','UserController@RegisterUser');
Route::post('/loginUser','UserController@LoginUser');

Route::post('/emailLink','UserController@sendLinkEmail');
Route::post('/reset-password','UserController@ResetPassword');
Route::get('/reset-form/{email}/{reset_token}','UserController@getResetForm')->name('get-reset-form');

//get routes
Route::get('veriyfyEmail/{email}/{verificationToken}','UserController@SendEmailDone')->name('verificationEmail');
Route::get('/logout-user',function(){
	Auth::logout();
	return redirect()->back();
});