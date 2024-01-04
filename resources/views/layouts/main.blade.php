<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLN Udiklat Jakarta | {{$title}}</title>
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: lightblue; color: white;">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="../img/BUMN.svg" height="30px" alt="BUMN"></a>
            <a class="navbar-brand" href="/"><img src="../img/Logo_PLN.svg" height="30px" alt="PLN"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarnav"
                aria-controls="navbarnav" aria-expanded="false" aria-label="toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarnav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ ($title === " about") ? 'active' : '' }}" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ ($title === " fasilitas") ? 'active' : '' }}"
                            href="/fasilitas">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/academy">Academies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kinerja">Kinerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kontak">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-c6rzsynm9kwdrmnet87bh95ognyzphctnxj1nw7rubcsyn/o0jlpcv8qyq46cdfl"
        crossorigin="anonymous"></script>
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="">
        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: #929fba">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-1 col-lg-2 col-xl-2 mx-auto mt-3">
                            <img src="img/BUMN.svg" width="95%" class="rounded float-start" alt="...">
                            <img src="img/Logo_PLN.svg" width="95%" class="rounded float-start" alt="...">
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                PLN UPDL Jakarta
                            </h6>
                            <p>
                                PT PLN (Persero) Udiklat Jakarta adalah Udiklat ke dua yang ada dilingkungan PT PLN
                                (Persero) Pusdiklat.
                                PT PLN ( Persero) Unit Pendidikan dan Pelatihan Jakarta berdiri sejak tahun 1997 adalah
                                gabungan antara Udiklat Slipi dengan Udiklat Ciracas beralamatkan di Jl. S. Parman No.
                                27 Slipi Jakarta Barat, yang pada awalnya bergerak dibidang Pendidikan khususnya Bidang
                                Non Teknik untuk intern PT PLN (Persero),
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Profile</h6>
                            <p>
                                <a class="text-white nav-link" href="/academy">Academies</a>
                            </p>
                            <p>
                                <a class="nav-link {{ ($title === " about") ? 'active' : '' }}" href="/about">About
                                    Us</a>
                            </p>
                            <p>
                                <a class="nav-link{{ ($title === " fasilitas") ? 'active' : '' }}"
                                    href="/fasilitas">Fasilitas</a>
                            </p>
                            <p>
                                <a class="nav-link" href="/kinerja">Kinerja</a>
                            </p>
                            <p>
                                <a class="nav-link" href="/kontak">Contact Us</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                            <!-- Facebook -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!"
                                role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!"
                                role="button"><i class="fab fa-google"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!"
                                role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!"
                                role="button"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Github -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!"
                                role="button"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                    <!--Grid row-->
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->
</body>

</html>
