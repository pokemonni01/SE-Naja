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
Route::get('/registersignup','Home_Controller@registersignup');
Route::get('/contactus','Home_Controller@contactus');
Route::get('/howtopay','Home_Controller@howtopay');
Route::get('/detail_Goods','Home_Controller@detail_Goods');
Route::get('/order','Home_Controller@order');
Route::get('/information','Home_Controller@information');
Route::get('/adminpage','Home_Controller@adminpage');
Route::get('/adminadd','Home_Controller@adminadd');

Route::get('/dashboard','Admin_Controller@admin');
Route::get('/admin/stock/','Stock_Controller@stock');
Route::get('/report','Admin_Controller@admin');
Route::get('/export','Admin_Controller@admin');
Route::get('/admin/addnewproduct/','Stock_Controller@addNewProduct');
Route::post('/admin/addnewproduct/','Stock_Controller@addNewProduct');











