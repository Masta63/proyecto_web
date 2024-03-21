<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        $totalPrice = 0;
        foreach ($cart as $product) {
            $totalPrice += $product['price'] * $product['quantity'];
        }

        return view('cart.index', ['cart' => $cart, 'totalPrice' => $totalPrice]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        if ($product) {
            $cart = $request->session()->get('cart', []);

            $cart[$product->id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1
            ];

            $request->session()->put('cart', $cart);

            return redirect()->route('cart.index')->with('status', 'Product added to cart successfully');
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request, string $id)
    {
        $cart = $request->session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;

            $request->session()->put('cart', $cart);

            return redirect()->route('cart.index')->with('status', 'Quantity Product updated to cart successfully');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $cart = $request->session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);

            $request->session()->put('cart', $cart);

            return redirect()->route('cart.index')->with('status', 'Product removed from cart successfully');
        } else {
            return redirect()->back();
        }
    }

    public function emptyCart(Request $request)
    {
        $request->session()->forget('cart');
        return redirect()->route('cart.index')->with('status', 'Cart emptied successfully');
    }
}
