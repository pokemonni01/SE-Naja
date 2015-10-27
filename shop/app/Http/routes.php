<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {return view('home');});
Route::get('/admin', function () {return view('admin');});
Route::get('/','Home_Controller@home');
Route::get('/contact','Home_Controller@contactrr');
Route::get('/design_goods','Home_Controller@design_goods');
Route::get('/register','Home_Controller@register');

Route::get('/dashboard','Admin_Controller@admin');
Route::get('/stock','Admin_Controller@admin');
Route::get('/report','Admin_Controller@admin');
Route::get('/export','Admin_Controller@admin');








