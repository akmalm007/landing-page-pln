@extends('layouts.main')


@section('container')
<h1>Welcome to Program</h1>
@foreach($programs as $program)
<article>
    <h2>
        <a href="/signature/{{ $program["slug"] }}">{{ $program ["title"]}}</a>
    </h2>
    <h5>{{ $program ["kompetensi"]}}</h5>
    <p>{{ $program ["detail"]}}</p>
</article>


@endforeach

@endsection
