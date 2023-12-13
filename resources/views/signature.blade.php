@extends('layouts.main')
@section('container')
<h1>Welcome to Signature Program</h1>
<article>
    <img src="../img/963.jpg" width="200" alt="Porsche 963">
    <h2> {{ $signature->title}} </h2>
    <h3>Signature Program of <a href="/categories/{{ $signature->category->slug}}">
      {{ $signature->category->name}}</a></h3>
    <h5>{{ $signature->kompetensi}} </h5>
    {!! $signature->detail !!}
</article>


@endsection
