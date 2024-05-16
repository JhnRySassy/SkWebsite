<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index() {
        return view('admins/index');
    }

    public function register() {
        return view('admins/register');
    }

    public function registerPost(Request $request) {
        $user = new Admin();

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->conpassword = Hash::make($request->conpassword);

        $user->save();

        return back()->with('success', 'Register Succesfully');

        // Admin::create($request->all());

        // return redirect(route('register'));

    }

    public function indexPost(Request $request) {
        $credetials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::attempt($credetials)) {
            return redirect('admins/dashboard')->with('success', 'Login Succesful');
        }

        return back()->with('error', 'Username or Password are Incorrect');
    }

    public function dashboard() {
        return view('admins/dashboard');
    }
}
