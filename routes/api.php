<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
 
Route::group(['middleware' => 'auth:api'], function() {
    Route::get('suppliers', 'App\Http\Controllers\SupplierController@index');
    Route::get('suppliers/{id}', 'App\Http\Controllers\SupplierController@show');
    Route::post('suppliers', 'App\Http\Controllers\SupplierController@store');
    Route::put('suppliers/{id}', 'App\Http\Controllers\SupplierController@update');
    Route::delete('suppliers/{id}', 'App\Http\Controllers\SupplierController@delete');
    
    Route::get('warehouses', 'App\Http\Controllers\WarehouseController@index');
    Route::get('warehouses/{id}', 'App\Http\Controllers\WarehouseController@show');
    Route::post('warehouses', 'App\Http\Controllers\WarehouseController@store');
    Route::put('warehouses/{id}', 'App\Http\Controllers\WarehouseController@update');
    Route::delete('warehouses/{id}', 'App\Http\Controllers\WarehouseController@delete');
    
    Route::get('products', 'App\Http\Controllers\ProductController@index');
    Route::get('products/{id}', 'App\Http\Controllers\ProductController@show');
    Route::post('products', 'App\Http\Controllers\ProductController@store');
    Route::put('products/{id}', 'App\Http\Controllers\ProductController@update');
    Route::delete('products/{id}', 'App\Http\Controllers\ProductController@delete');
});

Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout');
