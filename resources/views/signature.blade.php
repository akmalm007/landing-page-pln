@extends('layouts.main')
@section('container')
<h1>Welcome to Signature Program  </h1>
<article>
    <img src="../img/963.jpg" width="200" alt="Porsche 963">
    <h2> {{ $sig->title }} </h2>
    <p> {{ $sig->body }}
</article>
    <p><a href="/program/{{ $program->slug }}">Back to program</a>


@endsection
