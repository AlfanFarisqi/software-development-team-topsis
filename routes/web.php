<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/', function () {
    return 'Home';
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::prefix('admin')->name('admin.')->group(function () {
    
    // mahasiswa
    Route::view('/mahasiswa', 'admin.mahasiswa.index')->name('mahasiswa.index');
    Route::view('/mahasiswa/1', 'admin.mahasiswa.show')->name('mahasiswa.show');
    Route::view('/mahasiswa/1/edit', 'admin.mahasiswa.edit')->name('mahasiswa.edit');

    // kriteria
    Route::view('/kriteria', 'admin.kriteria.index')->name('kriteria.index');
    Route::view('/kriteria/1/edit', 'admin.kriteria.edit')->name('kriteria.edit');

    // upload berkas
    Route::view('/upload-berkas', 'admin.upload-berkas.index')->name('upload-berkas.index');

    // manajemen user
    Route::view('/manajemen-user', 'admin.manajemen-user.index')->name('manajemen-user.index');
    Route::view('/manajemen-user/1/edit', 'admin.manajemen-user.edit')->name('manajemen-user.edit');

    // hasil seleksi
    Route::view('/hasil-seleksi', 'admin.hasil-seleksi.index')->name('hasil-seleksi.index');

    // data penilaian
    Route::view('/data-penilaian/input', 'admin.data-penilaian.input')->name('data-penilaian.input');
});

=======
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
>>>>>>> 4b23f3757d51a5ccf639b481ca605e34ad047b13
