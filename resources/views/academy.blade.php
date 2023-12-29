@extends('layouts.main')
@section('container')
<div>
    <h1>Academy</h1>
    <p>UPDL Jakarta bertanggung jawab atas penguatan dan peningkatan kompetensi pegawai melalui
    agenda pembelajaran di academy sebagi berikut
    </p>
</div>
<div>
    <ul>
        <li>
        {{$title}}
        <a href="/program">Learn more</a>
        </li>
        <li>
        {{$title1}}
        <a href="/program">Learn more</a>
        </li>
        <li>
        {{$title2}}
        <a href="/program">Learn more</a>
        </li>
        <li>
        {{$title3}}
        <a href="/program">Learn more</a>
        </li>
    </ul>
</div>
@endsection
