<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Http\Controllers\Controller;
use App\Http\Requests\SupplierStoreRequest;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return Supplier::all();
    }
 
    public function show($id)
    {
        return Supplier::find($id);
    }

    public function store(SupplierStoreRequest $request)
    {
        $validated = $request->validated();
        return Supplier::create($request->all());
    }
}
