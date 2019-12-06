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

 // Authentication Routes...
        ROUTE::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        ROUTE::post('login', 'Auth\LoginController@login');
        ROUTE::post('logout', 'Auth\LoginController@logout')->name('logout');

       // Registration Routes...
		ROUTE::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
      ROUTE::post('register', 'Auth\RegisterController@register');


          // Password Reset Routes...
		ROUTE::resetPassword();
		// Password Confirmation Routes...
 		ROUTE::confirmPassword();
		ROUTE::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        ROUTE::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        ROUTE::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        ROUTE::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::get('/home', 'HomeController@index')->name('home');
