@extends('layouts.main')
@section('container')
    <p><a href="/program/{{ $program->slug }}">Back to program</a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <h2 class="text-center"> {{ $sig->title }} </h2>
                    <img src="https://source.unsplash.com/1200x400?{{ $sig->program->name }}" alt="{{ $sig->program->name }}" class="img-fluid">
                    <article>
                        <p> {{ $sig->body }}
                    </article>
            </div>
        </div>
    </div>
@endsection
