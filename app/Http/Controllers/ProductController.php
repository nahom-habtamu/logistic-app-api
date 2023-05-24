<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        return Product::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $warehouse = Product::findOrFail($id);
        $warehouse->update($request->all());

        return $warehouse;
    }

    public function delete(Request $request, $id)
    {
        $warehouse = Product::findOrFail($id);
        $warehouse->delete();

        return 204;
    }
}
