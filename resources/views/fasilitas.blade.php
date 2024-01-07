@extends('layouts.main')

@section('container')

    <!-- <-- Ide Pertama pakai Hero/Main Page -->
    <!-- <-- Ide Kedua pakai Carousel Page -->
    <!-- Ide kedua pake modal untuk tampila detail pada fasilitas pedukung  -->
    <h1 class="center">Fasilitas Utama di UPDL Jakarta</h1>


    <h2>Fasilitas Pendukung di UPDL Jakarta</h2>
    <p>
        Fasilitas-Fasilitas ini yang akan menjadi tempat para peserta melepas lelah
        dan jenuh dari belajar dan bisa dipakai ketika selesai pembelajaran
    </p>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/random?library" class="card-img-top" alt="">
                    <div class="card-body">
                        <h2 class="card-title">Perpustakaan </h2>
                            <p class="card-text">Tempat Untuk membaca </p>
                        <a href="..." class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/random?mosque" class="card-img-top" alt="">
                    <div class="card-body">
                        <h2 class="card-title">Perpustakaan </h2>
                            <p class="card-text">Tempat Untuk membaca </p>
                        <a href="..." class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/random?gym" class="card-img-top" alt="">
                    <div class="card-body">
                        <h2 class="card-title">Perpustakaan </h2>
                            <p class="card-text">Tempat Untuk membaca </p>
                        <a href="..." class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
