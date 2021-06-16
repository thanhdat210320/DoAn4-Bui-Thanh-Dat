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
//admin
Route::group(['namespace'=>'Admin'],function(){//namespace là cái khoảng không 
    Route::group(['prefix'=>'login','middleware'=>'checklogin'],function(){
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
    });
    Route::get('logout','HomeController@logout');
    Route::group(['prefix'=>'admin','middleware'=>'checklogout'],function(){
        Route::get('/','HomeController@index');
        Route::group(['prefix'=>'category'],function(){
            Route::get('add_category','ProductCategory@add_category');
            Route::post('add_category','ProductCategory@post_add_category');
            Route::get('/','ProductCategory@all_category');
            Route::get('edit_category/{id}','ProductCategory@getEditCategory');
            Route::post('edit_category/{id}','ProductCategory@postEditCategory');

            Route::get('delet_category/{id}','ProductCategory@delete');
        });
        Route::group(['prefix'=>'product'],function()
        {
            Route::get('add_product','ProductController@add_product');
            Route::post('add_product','ProductController@post_add_product');
            Route::get('/','ProductController@all_product');
            Route::get('edit_product/{id}','ProductController@getEditProduct');
            Route::post('edit_product/{id}','ProductController@postEditProduct');
            Route::get('delet_product/{id}','ProductController@delete');
            
        });
        Route::group(['prefix'=>'oder'],function()
        {
            Route::get('all_oder','OderController@all_oder');
        });
    });
});
//index
Route::group(['namespace'=>'Index'],function(){
    Route::get('home','HomeController@homepages');
    Route::get('/','HomeController@homepages');

    Route::get('checkout','HomeController@checkout');
    Route::get('/','HomeController@checkout');

    Route::get('CategoryHome/{type}','HomeController@getCategory');
    Route::get('/','HomeController@getCategory');

    Route::get('ProductDetail/{id}','HomeController@getProductDetail');
    Route::get('/','HomeController@getProductDetail');

    Route::get('add-to-cart/{id}','HomeController@addToCart');
    Route::get('show-cart','HomeController@showCart');
    Route::get('update-to-cart','HomeController@updateToCart');
    Route::get('delete-cart','HomeController@deleteCart');

    Route::get('getlogin','HomeController@GetLogin');
    Route::post('postlogin','HomeController@PostLogin');

    Route::get('add_oder','HomeController@Add_Oder');
    Route::post('save_oder','HomeController@Post_Add_Oder');

    Route::get('success','HomeController@Success');

    Route::get('productlist','HomeController@ProductList');
    Route::get('Search','HomeController@Search');
});



