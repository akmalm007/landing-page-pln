<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pln Udiklat Jakarta | {{$title}}</title>
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: lightblue; color: white;">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="../img/BUMN.svg" height="30px" alt="BUMN"></a>
            <a class="navbar-brand" href="/"><img src="../img/Logo_PLN.svg" height="30px" alt="PLN"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarnav" aria-controls="navbarnav" aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarnav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/about">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fasilitas">fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/program">program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kinerja">kinerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kontak">contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1>@yield('container')</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-c6rzsynm9kwdrmnet87bh95ognyzphctnxj1nw7rubcsyn/o0jlpcv8qyq46cdfl" crossorigin="anonymous"></script>
</body>

</html>
