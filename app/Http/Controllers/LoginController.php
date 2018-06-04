<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->only('index', 'login');
        $this->middleware('auth')->only('logout');
    }

    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['nm' => $request->post('name'), 'password' => $request->post('password')])) {
            return redirect('/');
        }

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
