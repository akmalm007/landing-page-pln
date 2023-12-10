@extends('layouts.main')

@section('container')
<h1>Welcome to Signature Program</h1>
<article>
    <img src="../img/963.jpg" width="200" alt="Porsche 963">
    <h2> {{ $signature["title"]}} </h2>
    <h5>{{ $signature["kompetensi"]}} </h5>
    <p>{{ $signature["detail"]}} </p>
</article>


@endsection
