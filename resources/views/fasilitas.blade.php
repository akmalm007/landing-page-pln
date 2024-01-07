@extends('layouts.main')

@section('container')

    <!-- <-- Ide Pertama pakai Hero/Main Page -->
    <!-- <-- Ide Kedua pakai Carousel Page -->
    <!-- Ide kedua pake modal untuk tampila detail pada fasilitas pedukung  -->
    <h1 class="center">Fasilitas Utama di UPDL Jakarta</h1>
    <div class="container">
        <div class="row">
            @foreach($primary as $utama)
            <div class="col-md-4 mb-4">
                <div class="card text-bg-dark">
                    <img src="https://source.unsplash.com/500x500?car" class="img-fluid card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">{{ $utama->name }}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small>Last updated 3 mins ago</small></p>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <h2>Fasilitas Pendukung di UPDL Jakarta</h2>
    <p>
        Fasilitas-Fasilitas ini yang akan menjadi tempat para peserta melepas lelah
        dan jenuh dari belajar dan bisa dipakai ketika selesai pembelajaran
    </p>

    <div class="container">
        <div class="row mb-3">
            @foreach ($secondary as $pendukung)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/500x600?{{ $pendukung->name }}" class="img-fluid card-img-top" alt="">
                    <div class="card-body">
                        <h2 class="card-title">{{ $pendukung->name }} </h2>
                        <p class="card-text">{{ $pendukung->desc }}</p>
                        <a href="..." class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
