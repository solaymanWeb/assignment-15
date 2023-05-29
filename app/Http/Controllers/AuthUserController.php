<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthUserController extends Controller
{
    //
    function profile(){
        return response('profile');
    }
    function settings(){
        return response('settings');
    }
}
