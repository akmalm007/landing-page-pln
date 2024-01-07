@extends('layouts.main')
@section('container')
    <p>
        <a href="/academy">Back to Academy</a>
    </p>
<div>
    <div class="card mb-3 text-center">
      <img src="https://source.unsplash.com/random?{{ $program->name }}" style="height: 300px" class="card-img-top" alt="{{ $program->name }}">
      <div class="card-body">
        <h1 class="card-title">{{ $program->name }}</h1>
        <p class="card-text">
        UPDL Jakarta bertanggung jawab atas penguatan dan peningkatan kompetensi pegawai melalui
        agenda pembelajaran di academy sebagai berikut
        </p>
        <p class="card-text">
            {{ $program->body}}
        </p>
      </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($signature_program as $sig)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/random?{{ $program->name }}" class="card-img-top" alt="{{ $program->name }}">
                    <div class="card-body">
                        <h2 class="card-title"> {{$sig->title}} </h2>
                            <p class="card-text"> {{$sig->excerpt}} </p>
                        <a href="/signature/{{ $sig->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
