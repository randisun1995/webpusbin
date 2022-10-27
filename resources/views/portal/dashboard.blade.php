<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Rancangan Portal Awal</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="{{asset('img/logoK.png')}}" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->


            <!-- Navbar & Hero Start -->
            <div class="container-fluid container-xxl position-relative p-0">
                <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                    <a href="" class="navbar-brand p-0">
                        <h1 class="m-0">Pusbin JFK</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                            <a href="/" class="nav-item nav-link active">Home</a>
                            <a href="/#about" class="nav-item nav-link">Tentang Kami</a>
                            <a href="/#layanan" class="nav-item nav-link">Layanan</a>
                            <a href="/#kegiatan" class="nav-item nav-link">Kegiatan</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lainnya</a>
                                <div class="dropdown-menu m-0">
                                    <a href="/#data" class="dropdown-item">Data JFK</a>
                                    <a href="/#team" class="dropdown-item">Our Team</a>
                                    <a href="/404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </nav>

                <div class="container-xxl py-5 bg-primary hero-header">
                    <div class="container my-5 py-5 px-lg-5">
                        <div class="row g-5 py-5">
                            <div class="col-12 text-center">
                                <h1 class="text-white animated slideInDown">Dashboard JFK</h1>
                                <hr class="bg-white mx-auto mt-0" style="width: 90px;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar & Hero End -->

        <!-- Dashboard Start -->
         <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="https://datastudio.google.com/u/0/reporting/8bdce627-eae3-4fa5-824b-e120841331ae/page/sfjO/edit" target="_blank">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fas fa-file-alt text-primary mb-4"></i>
                            <h5 class="mb-3">DASHBOARD MONITORING</h5>
                            <p class="m-0">HASIL UJI KOMPETENSI KEPEGAWAIAN</p>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <a href="https://datastudio.google.com/u/0/reporting/00c4f1c9-ca29-4374-968b-9168cbc4eb1d/page/ORZyC" target="_blank">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fas fa-user-friends text-primary mb-4"></i>

                            <h5 class="mb-3">DASHBOARD MONITORING  </h5>
                            <p class="m-0">PERPINDAHAN ​AUDITOR KEPEGAWAIAN KEDALAM JABATAN FUNGSIONAL LAIN</p>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="https://datastudio.google.com/reporting/e88d364f-81c5-4eb8-88ab-3aba73048ad5" target="_blank">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-network-wired text-primary mb-4"></i>
                            <h5 class="mb-3">DASHBOARD MONITORING</h5>
                            <p class="m-0">
                                PENGUSULAN FORMASI JABATAN FUNGSIONAL KEPEGAWAIAN </p>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="https://datastudio.google.com/reporting/39821497-615b-43d0-9c30-a5cc7ff797c2" target="_blank">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fas fa-chalkboard-teacher text-primary mb-4"></i>
                            <h5 class="mb-3">DASHBOARD EARLY WARNING SYSTEM</h5>
                            <p class="m-0">JABATAN FUNGSIONAL KEPEGAWAIAN</p>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <a href="https://datastudio.google.com/reporting/b725c051-0deb-4d21-b657-c713e3b066d1" target="_blank">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x far fa-window-restore text-primary mb-4"></i>
                            <h5 class="mb-3">DASHBOARD MONITORING</h5>
                            <p class="m-0">PERUBAHAN ANGKA KREDIT DAN PERUBAHAN NOMENKLATUR JABATAN FUNGSIONAL KEPEGAWAIAN
                                </p>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="https://datastudio.google.com/reporting/142a5ffc-e503-4908-92d0-973a9fcdedb9" target="_blank">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x far fa-chart-bar text-primary mb-4"></i>
                            <h5 class="mb-3">DATA STATISTIK</h5>
                            <p class="m-0">PEJABAT FUNGSIONAL KEPEGAWAIAN</p>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dashboard End -->





         <!-- Team Start -->
         <div id="team" class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Team Pusbin JFK<span></span></p>
                    <h1 class="text-center mb-5">Person In Charge</h1>
                </div>
                <!-- <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-1.jpg" alt="">
                                <h5>John Doe</h5>
                                <span>CEO & Founder</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-2.jpg" alt="">
                                <h5>Jessica Brown</h5>
                                <span>Web Designer</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-3.jpg" alt="">
                                <h5>Tony Johnson</h5>
                                <span>SEO Expert</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Team End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Alamat<span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Jl. Mayor Jendral Sutoyo No.12, RT.4/RW.14, Cililitan, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13640</p>
                        <p><i class="fa fa-phone-alt me-3"></i>(021) 80882815</p>
                        <p><i class="fa fa-envelope me-3"></i>pusbin@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                        <a class="btn btn-link" href="/#home">Home</a>
                        <a class="btn btn-link" href="/#about">Tentang Kami</a>
                        <a class="btn btn-link" href="/#layanan">Layanan</a>
                        <a class="btn btn-link" href="/#kegiatan">Kegiatan</a>
                        <a class="btn btn-link" href="/#data">Lainnya</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('img/img (1).jpg')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('img/img (2).jpg')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('img/img (3).jpg')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('img/img (4).jpg')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('img/img (5).jpg')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('img/img (6).jpg')}}" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                         <p class="section-title text-white h5 mb-4">Lainnya<span></span></p>
                        {{-- <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Pusbin_JFK</a>, All Right Reserved.

							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							<!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                            Distributed By a <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a> -->
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <!-- <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
