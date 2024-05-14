<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        echo "halo";
        echo "<h1>" . Auth::user()->name . "<h1>";
        echo "<a href='/logout'>Logout</a>";
    }
    public function admin() {
        return view('admin');
    }
    public function user() {
        return view('user');
    }
}