@extends('layouts.main')
@section('container')
<h1>Welcome to Signature Program  </h1>
<article>
    <h2> {{ $sig->title }} </h2>
    <p> {{ $sig->body }}
</article>
    <p><a href="/program/{{ $program->slug }}">Back to program</a>


@endsection
