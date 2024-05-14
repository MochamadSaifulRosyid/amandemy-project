<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\dosenController;

Route::middleware(['guest'])->group(function() {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home',function() {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function() { 
    Route::get('/login', [LoginController::class, 'index']);
    Route::get('/login/admin', [LoginController::class, 'admin']);
    Route::get('/login/user', [LoginController::class, 'user']);
    Route::get('/logout', [SesiController::class, 'logout']);
});

Route::resource('dosen', dosenController::class);

Route::get('/admin',function() {
    return redirect('/admin');
});
Route::get('/pengguna', function () {
    return view('pengguna');
});