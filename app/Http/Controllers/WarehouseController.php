<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {
        return Warehouse::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->update($request->all());

        return $warehouse;
    }

    public function delete(Request $request, $id)
    {
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->delete();

        return 204;
    }
}
