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
Route::filter('csrf', function() {
    $token = Request::ajax() ? Request::header('X-CSRF-Token') : Input::get('_token');
    if (Session::token() != $token)
        throw new Illuminate\Session\TokenMismatchException;
});
//Route::get('/', function () {return view('home');});
Route::get('/admin', function () {return view('admin');});
Route::get('/','Home_Controller@home');
Route::get('/contact','Home_Controller@contactrr');
Route::get('/design_goods','Home_Controller@design_goods');
Route::get('/register','Home_Controller@register');

Route::get('/dashboard','Admin_Controller@admin');
Route::get('/admin/stock/','Stock_Controller@stock');
Route::get('/report','Admin_Controller@admin');
Route::get('/export','Admin_Controller@admin');
Route::get('/admin/addnewproduct/','Stock_Controller@addNewProduct');
//Route::post('/admin/addnewproduct/','Stock_Controller@addNewProduct');
Route::post('/admin/addnewproduct/','Stock_Controller@addNewProduct');
Route::post('/admin/removeproduct/','Stock_Controller@removeProduct');

Route::post('/admin/getproduct/','Stock_Controller@getProduct');
Route::post('/admin/editproduct/','Stock_Controller@editProduct');

Route::get('/admin/product-type/','ProductType_Controller@productType');
Route::post('/admin/addnewproducttype/','ProductType_Controller@addNewProductType');
Route::post('/admin/removeproducttype/','ProductType_Controller@removeProductType');

Route::get('/admin/member/','ManageMember_Controller@member');

Route::get('/admin/membertype/','MemberType_Controller@memberType');
Route::post('/admin/addnewmemberstatus/','MemberType_Controller@addNewMemberStatus');
Route::post('/admin/removememberstatus/','MemberType_Controller@removeMemberStatus');















