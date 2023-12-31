@extends('layouts.main')
@section('container')
<div>
    <h1>Academy Individual {{ $program->name }}</h1>
    <p>UPDL Jakarta bertanggung jawab atas penguatan dan peningkatan kompetensi pegawai melalui
        agenda pembelajaran di academy sebagi berikut
    </p>
    <p>
        {{ $program->body}}
    </p>
    @foreach ($signature_program as $sig)
    <ul>
        <li>
            <h2> {{$sig->title}} </h2>
            <p> {{$sig->excerpt}} </p>
            <a href="/signature/{{ $sig->slug }} ">Read More</a>
        </li>
    </ul>
    @endforeach
    <p>
    <a href="/academy">Back to Academy</a>
    </p>
</div>
@endsection
