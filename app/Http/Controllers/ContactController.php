<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        return response()->json([
            'status' => 'Mail sent success!',
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);
    }
    function index(){
        return view('pages.contact');
    }

}
