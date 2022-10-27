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
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

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
                        <a href="#about" class="nav-item nav-link">Tentang Kami</a>
                        <a href="#layanan" class="nav-item nav-link">Layanan</a>
                        <a href="#kegiatan" class="nav-item nav-link">Kegiatan</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lainnya</a>
                            <div class="dropdown-menu m-0">
                                <a href="#data" class="dropdown-item">Data JFK</a>
                                <a href="#team" class="dropdown-item">Our Team</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>

                    </div>

                </div>
            </nav>

            <div id="home" class="container-xxl bg-primary hero-header" >
                <div class="">
                    <div class="">
                        <div class="">
                            <!-- <h1 class="text-white mb-4 animated slideInDown">A Digital Agency Of Inteligents & Creative People</h1>
                            <p class="text-white pb-3 animated slideInDown">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
                            <a href="" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a> -->
                        </div>
                        <div class="">
                            <img class="img-fluid " src="img/bkn.gif">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Feature Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h5 class="mb-3">Digital Marketing</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-search text-primary mb-4"></i>
                            <h5 class="mb-3">SEO & Backlinks</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                            <h5 class="mb-3">Design & Development</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Feature End -->


        <!-- About Start -->
        <div id ="about" class="container-xxl py-5" >
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary"><span></span>Tentang Kami<span></span></p>
                        <h1 class="mb-5">Pusat Pembinaan Jabatan Fungsional Kepegawaian</h1>
                        <p class="mb-4">Sebagai Instansi Pembina Jabatan Fungsional Kepegawaian yaitu Analis SDMA, Pranata SDMA, Asesor SDMA dan Auditor Manajemen ASN yang dimana dibawah naungan Badan Kepegawaian Negara.</p>
                        <div class="skill mb-4">

                        </div>
                        <div class="skill mb-4">

                        </div>
                        <div class="skill mb-4">

                        </div>
                        <a href="//pusbin.test" target="_blank" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Selengkapnya</a>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Data Star -->
        <div id="data" class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
            <p class="text-white text-center">Data Jabatan Fungsional Kepegawaian</p>
            <p class="text-white text-center">Per Oktober 2022</p>
            <div class="container py-5 px-lg-5">
                    <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                        <p class="text-white mb-0">Analis SDMA</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                        <p class="text-white mb-0">Pranata SDMA</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                        <p class="text-white mb-0">Asesor SDMA</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                        <p class="text-white mb-0">Auditor Manajemen ASN</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Data End -->


        <!-- Service Start -->

        <div id="layanan" class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Layanan Kami<span></span></p>
                    <h1 class="text-center mb-5">Aplikasi Pendukung Layanan Kami</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="//pusbin.test" target="_blank">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <img src="img/website.png" width="150 px">
                            </div>
                            <h5 class="mb-3">Website</h5>
                            <p class="m-0">Kenali Kami Selengkapya Disini!</p>
                            <a class="btn btn-square" href="//pusbin.test" target="_blank"><i class="fa fa-arrow-right"></i></a></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a href="//ukom-jfk.test" target="_blank">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <img src="img/logoukom.png" width="150 px">
                            </div>
                            <h5 class="mb-3">Uji Kompetensi</h5>
                            <p class="m-0">Aplikasi Pengusulan Peserta Uji Kompetensi Jabatan Fungsional Kepegawaian</p>
                            <a class="btn btn-square" href="//ukom-jfk.test" target="_blank"><i class="fa fa-arrow-right"></i></a></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="https://edupak.bkn.go.id/edupak/" target="_blank">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <img src="img/edupak.png" width="150 px">
                            </div>
                            <h5 class="mb-3">e-DUPAK</h5>
                            <p class="m-0">Aplikasi Daftar Usul Penetapan Angka Kredit Secara Elektronik</p>
                            <a class="btn btn-square" href="https://edupak.bkn.go.id/edupak/" target="_blank"><i class="fa fa-arrow-right"></i></a></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <a href="/konsultasi" target="_blank">
                            <div class="service-icon flex-shrink-0">
                                <img src="img/konsul.png" width="150 px">
                            </div>
                            <h5 class="mb-3">FAQ & Help Desk</h5>
                            <p class="m-0">Kami Siap Menjawab Pertanyaan Kamu</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a href="/dashboard" target="_blank">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <img src="img/data.png" width="150 px">
                            </div>
                            <h5 class="mb-3">Layanan Data</h5>
                            <p class="m-0">Temukan Data Yang Kamu Cari Disini!</p>
                            <a class="btn btn-square" href="/dashboard"><i class="fa fa-arrow-right"></i></a></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-android fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Peraturan Terbaru</h5>
                            <p class="m-0">Daftar Peraturan</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Service End -->


        <!-- Newsletter Start -->
        <!-- <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span></p>
                        <h1 class="text-center text-white mb-4">Stay Always In Touch</h1>
                        <p class="text-white mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo</p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Newsletter End -->


        <!-- Kegiatan Start -->
        <div id="kegiatan" class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Kegiatan Kami<span></span></p>
                    <h1 class="text-center mb-5">Dokumentasi Kegiatan Pusbin JFK</h1>
                </div>

                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/img (1).JPG" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/img (1).JPG" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Tema Kegiatan</p>
                                <h5 class="lh-base mb-0">Nama Kegiatan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/img (2).JPG" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/img (2).JPG" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Tema Kegiatan</p>
                                <h5 class="lh-base mb-0">Nama Kegiatan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/img (3).JPG" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/img (3).JPG" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Tema Kegiatan</p>
                                <h5 class="lh-base mb-0">Nama Kegiatan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/img (4).JPG" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/img (4).JPG" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Tema Kegiatan</p>
                                <h5 class="lh-base mb-0">Nama Kegiatan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/img (5).JPG" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/img (5).JPG" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Tema Kegiatan</p>
                                <h5 class="lh-base mb-0">Nama Kegiatan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/img (6).JPG" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="img/img (6).JPG" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Tema Kegiatan</p>
                                <h5 class="lh-base mb-0">Nama Kegiatan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kegiatan End -->


        <!-- Testimonial Start -->
        <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span></p>
                <h1 class="text-center mb-5">What Say Our Clients!</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial End -->


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
                        <a class="btn btn-link" href="#home">Home</a>
                        <a class="btn btn-link" href="#about">Tentang Kami</a>
                        <a class="btn btn-link" href="#layanan">Layanan</a>
                        <a class="btn btn-link" href="#kegiatan">Kegiatan</a>
                        <a class="btn btn-link" href="#data">Lainnya</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                        <div class="row g-2">
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('img/img (1).png')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('img/img (2).png')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('img/img (3).png')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('img/img (4).png')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('img/img (5).png')}}" alt="Image">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{asset('img/img (6).png')}}" alt="Image">
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

    <script type="text/javascript">

        $(function () {
                $('#jadwal').datetimepicker({
                    locale: 'id',
                    format: 'L',
                });
        });
    </script>

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
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
