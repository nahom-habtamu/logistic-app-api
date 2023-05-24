<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
 
Route::get('suppliers', 'App\Http\Controllers\SupplierController@index');
Route::get('suppliers/{id}', 'App\Http\Controllers\SupplierController@show');
Route::post('suppliers', 'App\Http\Controllers\SupplierController@store');
Route::put('suppliers/{id}', 'App\Http\Controllers\SupplierController@update');
Route::delete('suppliers/{id}', 'App\Http\Controllers\SupplierController@delete');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
