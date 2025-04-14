<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;


class ProductController extends Controller
{
    public function index(Request $request)
{
    $query = Product::query();

    if ($request->filled('search')) {
        $query->where('name', 'like', '%' . $request->input('search') . '%');
    }

   if ($request->filled('sort')) {
    $sortOrder = $request->input('sort') === 'desc' ? 'desc' : 'asc'; 
    $query->orderBy('price', $sortOrder);
} else {
    $query->orderBy('price', 'asc'); 
}


    $products = $query->paginate(6);

    return view('products.index', compact('products'));
}

public function show($id)
{
    $product = Product::findOrFail($id);
    return view('products.show', compact('product'));
}

public function create()
{
    return view('products.create');
}

public function store(ProductRequest $request)
{
    $product = new Product($request->validated());

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('public/products');
        $product->image = basename($path);
    }

    $product->save();

    return redirect()->route('products.index')->with('success', '商品を追加しました。');
}


public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('products.edit', compact('product'));
}

public function update(ProductRequest $request, $id)
{
    $product = Product::findOrFail($id);
    $product->update($request->validated());

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('public/products');
        $product->image = basename($path);
        $product->save();
    }

    return redirect()->route('products.index')->with('success', '商品情報を更新しました。');
}

public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.index')->with('success', '商品を削除しました。');
}

}
