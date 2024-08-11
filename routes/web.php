<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Transport\Smtp\Auth\LoginAuthenticator;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});
Route::get('/sign-up', function () {
    return view('signup');
});

route::middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('user/dashboardUser');
    });
    Route::get('/profile', function () {
        return view('user/profile');
    });
    Route::get('/kelas', function () {
        return view('user/kelas_saya');
    });
});


// logincontroller
route::get('form-login', [LoginController::class, 'register'])->name('form-daftar');
Route::get('login', [LoginController::class, 'index'])->name('login');
route::post('masuk', [LoginController::class, 'autentikasi'])->name('form-autentikasi');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
