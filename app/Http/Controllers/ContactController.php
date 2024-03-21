<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required',
            'description' => 'required|max:200',
        ]);

        return redirect()
            ->route('contact')
            ->with('status', 'Message send!');
    }
}
