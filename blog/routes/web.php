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
Route::get('/','HomeController@index')->name('home');
Route::get('trang-chu','HomeController@index')->name('home');
Route::get('dich-vu-dien-nuoc', 'HomeController@service')->name('service');
Route::get('chi-tiet/{title_sale}', 'HomeController@detail')->name('detail');
Route::get('/huong-dan-su-dung-dien-nuoc-hieu-qua', 'HomeController@support')->name('support');
Route::get('/meo-vat-dien-nuoc', 'HomeController@skills')->name('skills');
Route::get('/lien-he', 'HomeController@contact')->name('contact');
Auth::routes();
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',[
        'as'=>'dashboard',
        'uses'=>'ProductController@getDashboard'
    ]);
    Route::group(['prefix'=>'news'],function() {
        Route::get('list', [
            'as' => 'admin.news.list',
            'uses' => 'NewsController@getListNews'
        ]);
        Route::get('add', [
            'as' => 'news.add',
            'uses' => 'NewsController@getAddNews'
        ]);
        Route::post('add',[
            'as'=>'admin.news.add',
            'uses'=>'NewsController@postAddNews'
        ]);
    });
    Route::group(['prefix'=>'product'],function(){
        Route::get('list',[
            'as'=>'list',
            'uses'=>'ProductController@getProduct'
        ]);
        Route::get('add',[
            'as'=>'add',
            'uses'=>'ProductController@getAddProduct'
        ]);
        Route::post('add',[
            'as'=>'add',
            'uses'=>'ProductController@postAddProduct'
        ]);
    });
    Route::group(['prefix'=>'category'],function(){
        Route::get('list',[
            'as'=>'admin.category.list',
            'uses'=>'CategoryController@getListCategory'
        ]);
        Route::get('add',[
            'as'=>'category.add',
            'uses'=>'CategoryController@getAddCategory'
        ]);
        Route::post('add',[
            'as'=>'admin.category.add',
            'uses'=>'CategoryController@postAddCategory'
        ]);
    });
});