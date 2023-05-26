<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use App\Http\Controllers\Controller;
use App\Http\Requests\WarehouseStoreRequest;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index(Request $request)
    {
        $supplierId = request()->query('supplierId');

        if(empty($supplierId)){
            return Warehouse::all();
        }
        else {
            return Warehouse::query()->where('supplier-id', 'LIKE', $supplierId)->get();
        }
    }
 
    public function show($id)
    {
        return Warehouse::find($id);
    }

    public function store(WarehouseStoreRequest $request)
    {
        $validated = $request->validated();
        return Warehouse::create($request->all());
    }
}
