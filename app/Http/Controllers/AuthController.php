<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Hash;

class AuthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('isLoggedIn');;
    }

    public function dashboard(Request $request) {
        $data = array();
        if (Auth::check()) {
            $data = Auth::user();
        }

        return view('dashboard', compact('data'));
    }

    public function logout() {
        if (Auth::check()) {
            Auth::logout();

            return redirect('login');
        }
    }
}
