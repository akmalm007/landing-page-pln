@extends('layouts.main')
@section('container')
<div>
    <div class="card mb-3">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h1 class="card-title">{{ $program->name }}</h1>
        <p class="card-text">
        UPDL Jakarta bertanggung jawab atas penguatan dan peningkatan kompetensi pegawai melalui
        agenda pembelajaran di academy sebagi berikut
        </p>
        <p class="card-text">
            {{ $program->body}}
        </p>
      </div>
    </div>

@foreach ($signature_program as $sig)
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title"> {{$sig->title}} </h2>
                <p class="card-text"> {{$sig->excerpt}} </p>
            <a href="/signature/{{ $sig->slug }}" class="btn btn-primary">Read More</a>
        </div>
    </div>
@endforeach
    <p>
        <a href="/academy">Back to Academy</a>
    </p>
</div>
@endsection
