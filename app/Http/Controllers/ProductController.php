<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductStoreRequest;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $warehouseId = request()->query('warehouseId');

        if(empty($warehouseId)){
            return Product::all();
        }
        else {
            return Product::query()->where('warehouse-id', 'LIKE', $warehouseId)->get();
        }
    }
 
    public function show($id)
    {
        return Product::find($id);
    }

    public function store(ProductStoreRequest $request)
    {
        $validated = $request->validated();
        return Product::create($request->all());
    }
}
