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
        <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

         <!-- Datepicker -->

         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>



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
                                <h1 class="text-white animated slideInDown">Usul Konsultasi Online</h1>
                                <hr class="bg-white mx-auto mt-0" style="width: 90px;">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar & Hero End -->

        <!-- Form Usulan Konsultasi -->
         <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            {{-- NIP --}}
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" class="form-control mb-2 @error('nip') is-invalid @enderror" id="nip" name="nip" required maxlength="18" value="{{ old('nip') }}" onkeypress="return onlyNumberKey(event)">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Cari NIP</button>
                              </div>

                            @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                            {{-- NAMA --}}
                            <label for="nama" class="form-label">NAMA LENGKAP</label>
                            <input type="text" class="form-control mb-2 @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama') }}" disabled>
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                            {{-- JABATAN --}}
                            <label for="jabatan_sekarang" class="form-label">JABATAN SAAT INI</label>
                            <input type="text" class="form-control mb-2 @error('jabatan_sekarang') is-invalid @enderror" id="jabatan_sekarang" name="jabatan_sekarang" required value="{{ old('jabatan_sekarang') }}" disabled>
                            @error('jabatan_sekarang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            {{-- INSTANSI --}}
                            <label for="tmt_jabatan" class="form-label">INSTANSI</label>
                            <input type="text" class="form-control mb-2 @error('instansi') is-invalid @enderror" id="instansi" name="instansi" required value="{{ old('instansi') }}" disabled>
                            @error('instansi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            {{-- PERIHAL KONSULTASI --}}
                            <label for="jabatan_dituju" class="form-label">PERIHAL KONSULTASI</label>
                            <select class="form-select mb-2" class="form-control mb-2 @error('jabatan_dituju') is-invalid @enderror" id="jabatan_dituju" name="jabatan_dituju" required>

                                <option selected disabled>Pilih Catatan</option>
                                <option value="1">Ujian Kompetensi Kenaikan Jenjang</option>
                                <option value="2">Ujian Kompetensi Perpindahan Jabatan</option>
                                <option value="3">Ujian Kompetensi Inpassing </option>
                                <option value="4">Tim Penilai</option>
                                <option value="5">Pengajuan Dupak</option>
                                <option value="6">Sosoalisasi</option>
                            </select>

                            @error('jabatan_dituju')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            {{-- PILIH TANGGAL --}}
                            <label for="tingkat" class="form-label">PILIH JADWAL</label>
                            <div class="input-group mb-3">
                                <input type="text" class="datepicker @error('jadwal')is-invalid @enderror" id="jadwal" name="jadwal" value="{{ old('jadwal') }}" data-toggle="datetimepicker" data-target="#jadwal" aria-describedby="basic-addon2" required>
                                <span class="input-group-text" class ="datepicker" id="basic-addon2" ><i class="fas fa-person"></i></span>


                                <script type="text/javascript">
                                $('.datepicker').datepicker();
                                </script>

                            </div>
                            @error('jadwal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            {{-- Button --}}
                            <div class="col text-center m-3">
                             <button type="submit" class="btn btn-primary mb-3" class="" id="kirim">KIRIM USULAN</button>
                             <i class="far fa-calender-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>



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
