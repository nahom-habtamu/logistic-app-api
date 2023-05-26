<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;

// Route::group(['middleware' => 'auth:api'], function() {
    Route::resources([
        'suppliers' => SupplierController::class,
        'warehouses' => WarehouseController::class,
        'products' => ProductController::class,
    ]);
// });

Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout');