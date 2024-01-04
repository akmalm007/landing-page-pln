@extends('layouts.main')
@section('container')
<div class="card text-bg-dark">
    <img src="img/img.jpg" style="width: 1300px; height: 400px;" class="card-img" alt="...">
    <div class="card-img-overlay">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
            This content is a little bit longer.</p>
        <p class="card-text"><small>Last updated 3 mins ago</small></p>
    </div>
</div>
<h1>Halaman Home</h1>
<ol>
    <li>List yang perlu dilakukan selama development</li>
    <li>Coba develop sampai bagia migration</li>
    <li>Hostig di Google Cloud dengan Compute Engine</li>
    <li>Buat Github action agar CI/CD</li>
</ol>
@endsection
