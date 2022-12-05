<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('alreadyLoggedIn');;
    }

    public function registration() {
        return view("auth.registration");
    }

    public function registerUser(Request $request) {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'repassword'=>'required|same:password',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $result = $user->save();

        if ($result) {
            return back()->with('success', 'You have registered successfully');
        }

        return back()->with('fail', 'Something went wrong');
    }
}
