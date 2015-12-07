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
Route::get('/contactus','Home_Controller@contactus');
Route::get('/howtopay','Home_Controller@howtopay');
Route::get('/categoryall/allproduct/detail_Goods','Home_Controller@detail_Goods');
Route::get('/order','Home_Controller@order');
Route::get('/information','Home_Controller@information');
Route::get('/adminpage','Home_Controller@adminpage');
Route::get('/adminadd','Home_Controller@adminadd');
Route::get('/categoryall','Home_Controller@categoryall');
Route::get('/watchchoosesex','Home_Controller@watchchoosesex');
Route::get('/categoryall/{id}','Home_Controller@showProduct');
Route::get('/notification','Home_Controller@notification');
Route::get('/detaildesigngood','Home_Controller@detaildesigngood');
Route::get('/designmale','Home_Controller@designmale');
Route::get('/designfemale','Home_Controller@designfemale');
Route::get('/forget','Home_Controller@forget');
//aadmin
Route::get('/admin/print1','Stock_Controller@print1');
Route::get('/admin/report1','Stock_Controller@report1');
//Register
Route::get('/register','Home_Controller@register');
Route::post('/register','Home_Controller@submit');
Route::post('/forget','Home_Controller@forgetpassword');

//Stock
Route::get('/admin/stock/','Stock_Controller@stock');
Route::get('/report','Admin_Controller@admin');
Route::get('/export','Admin_Controller@admin');
Route::get('/admin/addnewproduct/','Stock_Controller@addNewProduct');
//Route::post('/admin/addnewproduct/','Stock_Controller@addNewProduct');
Route::post('/admin/addnewproduct/','Stock_Controller@addNewProduct');
Route::post('/admin/removeproduct/','Stock_Controller@removeProduct');
Route::post('/admin/getproduct/','Stock_Controller@getProduct');
Route::post('/admin/editproduct/','Stock_Controller@editProduct');
//ProductType
Route::get('/admin/product-type/','ProductType_Controller@productType');
Route::post('/admin/addnewproducttype/','ProductType_Controller@addNewProductType');
Route::post('/admin/removeproducttype/','ProductType_Controller@removeProductType');
//ManageMember
Route::get('/admin/member/','ManageMember_Controller@member');
Route::get('/admin/membertype/','MemberType_Controller@memberType');
//MemberType
Route::post('/admin/addnewmemberstatus/','MemberType_Controller@addNewMemberStatus');
Route::post('/admin/removememberstatus/','MemberType_Controller@removeMemberStatus');
//Login
Route::post('/login','Login_Controller@login');
Route::get('/logout','Login_Controller@logout');
//Basket
Route::post('/add2cart/','Order_Controller@add2cart');
Route::post('/getproductinbasket/','Order_Controller@getProductInBasket');
Route::post('/getproduct/','Order_Controller@getProduct');
Route::post('/clearBasket/','Order_Controller@clearBasket');















