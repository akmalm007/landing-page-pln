<?php

use App\Http\Controllers\ProgramController;
use App\Models\Category;
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

Route::get('/academy', function () {
    return view('academy', [
        "title" => "Leadership Academy",
        "title1" => "Corporate Planning Academy",
        "title2" => "Risk & Finance Academy",
        "title3" => "Digital Academy",
    ]);
});

Route::get('/program', function () {
    return view('program', [
        "title" => "Apalah"
    ]);
});

Route::get('/signature/{signature:kompetensi}', [ProgramController::class, 'show']);

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'programs' => $category->programs,
        'category' => $category->name,

    ]);
});
