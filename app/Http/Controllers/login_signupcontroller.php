<?php

namespace App\Http\Controllers;

use App\Models\test_project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class login_signupcontroller extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function signup(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        test_project::create([
            // 'name' => 'John Smith',
            'email' => $req['email'],
            'password' => Hash::make($req['password']),
            // 'remember_token' => str_random(10),
        ]);
        // $obj = new test_project;
        // $obj->email = $req['email'];
        // // $obj->password = hash::make($req['password']);
        // $obj->save();
        return view('thanku');
    }
    public function login()
    {
        return view('login');
    }
    public function detailverify(Request $req)
    {
        // dd($check);
        if
        (Auth::attempt($req->only('email', 'password'))) {
            echo "login successful";
        } else {
            echo "login failure";
        }

    }
}