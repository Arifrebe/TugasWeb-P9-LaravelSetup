<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'nama' => 'Arif',
        'prodi' => 'Ilmu Komputer',
        'semester' => 2,
    ];

    return view('home', $data);
});

Route::get('/about', function () {
    $data = [
        'judul' => 'Tentang Saya',
        'nama' => 'Arif',
        'prodi' => 'Ilmu Komputer',
        'kampus' => 'Universitas Negeri Medan',
    ];

    return view('about', $data);
});

Route::get('/contact', function () {
    $data = [
        'email' => 'arifharahap057@gmail.com',
        'instagram' => '@arifrebbe',
        'alamat' => 'Medan, Indonesia',
    ];

    return view('contact', $data);
});

Route::get('/hello/{nama}', function ($nama) {
    return view('hello', ['nama' => $nama]);
});