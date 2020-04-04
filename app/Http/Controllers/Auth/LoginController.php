<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function index()
    {
        if (Auth::check()){
            return redirect()->route('admin.dashboard.index');
        }
        return view('auth.login');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard.index');
        }
        return redirect()->route('admin.login');
    }

    public function logout()
    {
        $this->guard()->logout();
        return redirect()->route('front.main');
    }
}
