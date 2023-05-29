<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    function index()
    {
        return view('pages.register');
    }
    function registration(Request $request)
    {


        $validator = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fail()) {
            return redirect()->back()->withErrors($validator);
        }
    }
}