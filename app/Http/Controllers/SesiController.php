<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SesiController extends Controller
{
    public function index() {
        return view('login');
    }
    function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if(Auth::user()->role == 'admin') {
                return redirect('login/admin');
            } 
            elseif(Auth::user()->role == 'user') {
                return redirect('login/user');
            }

        } else {
            return redirect('')->withErrors('Ussername dan password tidak sesuai')->withInput();
        }
    }

    function logout() {
        Auth::logout();
        return redirect('');
    }
}