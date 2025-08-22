<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.reg');

    }

    /** Register */

    public function register(Request $request){
         return view('auth.reg');
    }

    /** Login */
    public function login(Request $request){
         return view('auth.login');
    }
}
