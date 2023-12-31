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
      <article>
        <h2>{{ $academy->title }}</h2>
        <p><a href="/program/{{ $academy->slug }}">Learn More</a></p>
   @endforeach

</div>
@endsection
