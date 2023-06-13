<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use App\Models\Category;
use App\Models\Provider;
use Mockery\Undefined;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        $providers = Provider::all();

        return view('admin.product.create', compact('categories', 'providers'));
    }

    public function store(StoreRequest $request)
    {   
        if ($request->hasFile('picture') ) {
            $file = $request->file('picture');
            $picture_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/image'), $picture_name);
            
            $product = Product::create($request->all() + [
                'image' => $picture_name
            ]);
        }

        $product = Product::create($request->all());

        $product->update(['code' => $product->id]);
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('admin.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $providers = Provider::all();

        return view('admin.product.edit', compact('product', 'categories', 'providers'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        if ($request->file('picture') ==! 'Undefined' ) {
            $file = $request->file('picture');
            $picture_name = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/image'), $picture_name);
            
            $product->update($request->all() + [
                'image' => $picture_name
            ]);
        }

        $product->update($request->all());

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
