<?php

use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;
use App\Models\Program;

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

Route::get('/fasilitas', function () {
    return view('fasilitas', [
        "title" => "Fasilitas",
    ]);
});

Route::get('/kinerja', function () {
    return view('kinerja', [
        "title" => "Finerja",
    ]);
});



Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
    ]);
});

Route::get('/program', [ProgramController::class, 'index']);

Route::get('/signature/{slug}', [ProgramController::class, 'show']);
