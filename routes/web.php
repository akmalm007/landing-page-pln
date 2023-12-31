<?php

use App\Http\Controllers\AcademyController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SignatureProgramController;
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

Route::get('/fasilitas', function () {
    return view('fasilitas', [
        "title" => "Fasilitas",
    ]);
});

Route::get('/kinerja', function () {
    return view('kinerja', [
        "title" => "Kinerja",
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
    ]);
});

//For All Academy in PLN
Route::get('/academy', [AcademyController::class, 'index']);

//For Individual Program in PLN Example
Route::get('/academies/{academy:slug}', [AcademyController::class, 'show']);

Route::get('/program/{program:slug}', [ProgramController::class, 'show']);


Route::get('/signature/{sig:slug}', [SignatureProgramController::class, 'show']);

// Route untuk kategori tetapi udah tidak dipake
// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('category', [
//         'title' => $category->name,
//         'programs' => $category->programs,
//         'category' => $category->name,
//
//     ]);
// });
