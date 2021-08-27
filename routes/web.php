<?php

use Illuminate\Support\Facades\Route;

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

//----------------------------------------------------------------------------------------------------------------
// Registration & auth routes for customers section
Route::get('login', 'Customers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Customers\Auth\LoginController@login');
Route::post('logout', 'Customers\Auth\LoginController@logout')->name('logout');
// Registration Routes...
Route::get('register', 'Customers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Customers\Auth\RegisterController@register');
// Password Reset Routes...
Route::get('password/reset', 'Customers\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Customers\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Customers\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Customers\Auth\ResetPasswordController@reset')->name('password.update');
// Password Confirmation Routes...
Route::get('password/confirm', 'Customers\Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Customers\Auth\ConfirmPasswordController@confirm');
// Email Verification Routes...
Route::get('email/verify', 'Customers\Auth\VerificationController@show')->name('admin.verification.notice');
Route::get('email/verify/{id}/{hash}', 'Customers\Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Customers\Auth\VerificationController@resend')->name('verification.resend');
// End of registration & auth routes for customers section
//----------------------------------------------------------------------------------------------------------------
