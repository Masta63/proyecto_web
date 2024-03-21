<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        $totalPrice = 0;
        foreach ($cart as $product) {
            $totalPrice += $product['price'] * $product['quantity'];
        }

        return view('checkout.index', ['cart' => $cart, 'totalPrice' => $totalPrice]);
    }
    public function confirm(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'address' => 'required',
            'city' => 'required|max:20',
            'zipcode' => 'required|numeric',
            'phone' => 'required|numeric|digits:10',
        ]);

        $cart = $request->session()->get('cart', []);
        foreach ($cart as $product) {
            $productBD = Product::find($product['id']);

            //TODO: podria manejarse mejor la logica de manejo de stock
            if ($product) {
                if ($product['quantity'] <= $productBD->quantity) {
                    $productBD->quantity -= $product['quantity'];
                    $productBD->save();
                } else {
                    $productBD->quantity = 0;
                    $productBD->save();
                }
            }
        }

        $cartController = new CartController();
        $cartController->emptyCart($request);


        return view('checkout.success');
    }
}
