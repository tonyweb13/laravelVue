<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $product = Product::all();
        return response()->json($product);
    }

    public function create(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return $product;
    }

    public function show(int $id, Request $request)
    {
        $product = Product::updateOrCreate(['id' => $id], $request->all());
        return $product;
    }

    public function edit(int $id)
    {
        $product = Product::all()->where('id', $id)->first();
        return $product;
    }

    public function destroy(int $id)
    {
        $product = Product::findOrFail($id)->delete();
        return $product;
    }

}
