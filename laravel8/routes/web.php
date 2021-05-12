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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Route::name('admin.')->group(function () {
    Route::get('/products', function () {
        // Route assigned name "admin.users"...
    })->name('products.list');
});*/
Route::group([
    'prefix' => 'admin',
//    'middleware' => 'admin'
], function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('', ['uses' => 'App\Http\Controllers\Admin\DashboardController@index', 'as' => 'admin.dashboard.index']);
    });
    // Admin product
    Route::group(['prefix' => 'products'], function () {
        Route::get('', ['uses' => 'App\Http\Controllers\Admin\ProductsController@index', 'as' => 'admin.products.index']);
        Route::get('create', [
            'as' => 'admin.products.create', 'uses' => 'App\Http\Controllers\Admin\ProductsController@create'
        ]);
        Route::post('store', [
            'as' => 'admin.products.store', 'uses' => 'App\Http\Controllers\Admin\ProductsController@store'
        ]);
        Route::get('edit/{id}', [
            'as' => 'admin.products.edit', 'uses' => 'App\Http\Controllers\Admin\ProductsController@edit'
        ]);
    });
    // Admin category
    Route::group(['prefix' => 'category'], function () {
        Route::get('list', [
            'as' => 'admin.category.list', 'uses' => 'Admin\CategoryController@list'
        ]);
        Route::get('', [
            'as' => 'admin.category.index', 'uses' => 'Admin\CategoryController@index'
        ]);
        Route::get('create', [
            'as' => 'admin.category.create', 'uses' => 'Admin\CategoryController@create'
        ]);
        Route::post('store', [
            'as' => 'admin.category.store', 'uses' => 'Admin\CategoryController@store'
        ]);
        Route::get('edit/{id}', [
            'as' => 'admin.category.edit', 'uses' => 'Admin\ProductsController@edit'
        ]);
    });

    // API
    Route::get('/api/list_products', [\App\Http\Controllers\Api\ProductsApiController::class, 'getListProducts']);
    Route::post('/api/products/add', [\App\Http\Controllers\Api\ProductsApiController::class, 'addProducts']);
    Route::get('/api/list_category', [\App\Http\Controllers\Api\CategoryApiController::class, 'getListCategory']);

});



