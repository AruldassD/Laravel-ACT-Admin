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

Route::get('/home', 'HomeController@index')->name('home');

//users
Route::resource('users', 'UsersController');
Route::get('data', 'UsersController@anyData');
Route::get('/getPassword', 'UsersController@getPassword');
Route::post('/updatePassword', 'UsersController@updatePassword');


//Customers
Route::resource('customers', 'CustomerController');
Route::post('postCustomer', 'CustomerController@postCustomer');
Route::get('customersData', 'CustomerController@customersData');

//Reports
Route::get('reports', 'ReportController@index');
Route::post('postReport', 'ReportController@postReport');

//Mobile Api

Route::get('mobilelogin','LoginApiController@login');
Route::get('phone','LoginApiController@verifyNumber');
Route::get('addcustomer','LoginApiController@addcustomer');
Route::get('services','LoginApiController@services');
Route::get('serviceReport','LoginApiController@serviceReport');
