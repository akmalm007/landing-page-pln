@extends('layouts.main')
@section('container')
<div>
    <h1>Academy</h1>
    <p>UPDL Jakarta bertanggung jawab atas penguatan dan peningkatan kompetensi pegawai melalui
    agenda pembelajaran di academy sebagi berikut
    </p>
</div>

<div>
    @foreach ($academies as $academy)
    <div class="card mb-3 text-center">
        <img src="https://source.unsplash.com/random?{{ $academy->title }}" style="height: 300px" class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-title">{{ $academy->title }}</h2>
            <p class="card-text">{{ $academy->slug }}</p>
            <p><a href="/program/{{ $academy->slug }}" class="btn btn-primary">Learn More</a></p>
        </div>
    </div>
@endforeach
</div>

@endsection
