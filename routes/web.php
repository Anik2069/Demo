<?php

/*
| --------------------------------------------------------------------------
| Web Routes
| --------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/i', function () {
    return view('index');
});


Route::get('/login', 'AdminController@login');

Route::post('/logsubmit', 'AdminController@login1');

Route::get('/demo', 'AdminController@login2');

Route::group(['middleware' => 'checkuser'],function () {
    Route::get('/', 'PaymentController@getdata');

    Route::get('/cp', 'AdminController@getdata');

    Route::post('/submitpass', 'AdminController@submitdata');

    Route::get('/logout', 'AdminController@logout');


    Route::get('/product', 'ProductController@getdata');

    Route::post('/submitproduct', 'ProductController@submitdata');

    Route::get('/deleteproduct/{id}', 'ProductController@deleteinfo');

    Route::get('/group', 'GroupController@getinfo');

    Route::post('/submitgroupname', 'GroupController@submitname');

    Route::get('/delete/{id}', 'GroupController@deleteinfo');

    Route::get('/dsr', 'DsrController@getdata');

    Route::post('/submitdsr', 'DsrController@submitdata');

    Route::get('/deletedsr/{id}', 'DsrController@deleteinfo');

    Route::get('/dailyWork', 'DworkController@getdata');

    Route::get('/dlt/{id}', 'DworkController@deleterecord');


    Route::post('/submitdaily', 'DworkController@submitdata');

    Route::get('/workhistory', 'DworkController@workhistory');

    Route::post('/submittoday', 'SeelingController@sells');

    //
    Route::get('/workhistory_2', 'DworkController@workhistory1');

    Route::post('/submitbuyingproduct','BuyingproductController@submitdata');
    Route::get('/getdata', 'DworkController@get');

    Route::post('/submitdsrproduct', 'WorkdetailsController@dsrwork');

    Route::get('/deletedproduct/{id}', 'WorkdetailsController@deleteinfo');

    Route::get('/return', 'WorkdetailsController@returnlist');

    Route::get('/returnlist/{id}', 'WorkdetailsController@returnlist1');

    Route::post('/addreturn', 'WorkdetailsController@listadd');

    Route::post('/submitpayment', 'WorkdetailsController@pay');

    Route::post('/submitcomment', 'CommentController@comment');

    Route::get('/deletepay/{id}', 'WorkdetailsController@paydel');

    Route::get('/deletein/{id}', 'WorkdetailsController@indel');

    Route::get('/sheet/{id}', 'InexController@show');

    Route::get('/all', 'InexController@returnlist');
    Route::post('/changeb', 'InexController@update1');
    Route::post('/changes', 'InexController@update2');
    Route::post('/changepata', 'InexController@update3');
    Route::get('/buyingrecord', 'BuyingproductController@listof');
    Route::get('/dltb/{id}', 'BuyingproductController@deleterecord');
    Route::get('/sellingrecord', 'BuyingproductController@listof1');
    Route::get('/dlts/{id}', 'BuyingproductController@deleterecord1');
    Route::get('/accounts', 'AdminController@account');

    Route::get('/showreport', 'AdminController@showreport');

});





