<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "name" => "Akmal Maulana",
        "kampus" => "Politeknik Negeri Jakarta",

    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});

Route::get('/program', function () {
    return view('program', [
        "title" => "Program",
    ]);
});

Route::get('/fasilitas', function () {
    return view('fasilitas', [
        "title" => "fasilitas",
    ]);
});

Route::get('/kinerja', function () {
    return view('kinerja', [
        "title" => "kinerja",
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
    ]);
});
