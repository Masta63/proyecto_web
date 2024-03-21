<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = trim($request->get('search'));
        $categoryFilter = $request->query('category');
    
        $query = Product::orderBy('name');
    
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }
    
        if ($categoryFilter) {
            $query->where('category', $categoryFilter);
        }
    
        $products = $query->get();
    
        return view('products.index', [
            "products" => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'image' => 'required',
            'description' => 'required|max:200',
            'category' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        Product::create([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
            'category' => $request->category,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);
        return redirect()
            ->route('panel.products')
            ->with('status', 'Product created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|max:50',
            'image' => 'required',
            'description' => 'required|max:200',
            'category' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        $product->update([
            'name' => $request->name,
            'image' => $request->image,
            'description' => $request->description,
            'category' => $request->category,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);
        return redirect()
            ->route('panel.products')
            ->with('status', 'Product edit successfully!');
    }

    public function confirmDestroy(Product $product)
    {
        return view('products.confirm_destroy', [
            "product" => $product,
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()
            ->route('panel.products')
            ->with('status', 'The product has been successfully removed.');
    }
}
