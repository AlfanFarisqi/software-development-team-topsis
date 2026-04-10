<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/profile', function () {
    return view('auth.profile');
});

Route::get('/informasi', function () {
    return view('auth.informasi');
});

Route::get('/daftar', function () {
    return view('auth.daftar');
});

Route::get('/berkas', function () {
    return view('auth.berkas');
}); 

Route::get('/penilaian', function () {
    return view('auth.penilaian');
});

Route::get('/hasil', function () {
    return view('auth.hasil');
});

Route::get('/pengumuman', function () {
    return view('auth.pengumuman');
});