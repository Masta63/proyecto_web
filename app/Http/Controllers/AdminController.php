<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

const ADMIN_ROL = 'admin';
const OPERATOR_ROL = 'operator';

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function listProducts()
    {
        $products = Product::all();

        return view(
            'admin.products',
            [
                "products" => $products,
            ]
        );
    }

    public function listUsers()
    {
        $users = User::where('role', ADMIN_ROL)->orWhere('role', OPERATOR_ROL)->get();

        return view('admin.users', [
            'users' => $users,
        ]);
    }
}
