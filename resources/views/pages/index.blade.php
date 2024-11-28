<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rumah Yatim & Dhuafa KKMB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('layout.spinner')
        <!-- Spinner End -->


        <!-- Navbar Start -->
        @include('layout.navbar')
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/fotopanti/dorm2.jpg" style="height: 768px; width: 1366px" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Rumah Yatim & Dhuafa KKMB</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2"> Mendidik anak yatim, piatu dan dhuafa dengan sistem pendidikan asrama yang berkualitas agar menjadi manusia yang bersifat mulia.</p>
                                    <a href="/about" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Tentang Kami</a>
                                    <a href="/facility" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Fasilitas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/fotopanti/dorm1.jpg" style="height: 768px; width: 1366px" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Rumah Yatim & Dhuafa KKMB</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Memberikan bimbingan keterampilan kepada umat maupun anak asuh agar mampu menunjang pencapaian prestasi akademik & non akademik.</p>
                                    <a href="/about" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Tentang Kami</a>
                                    <a href="/facility" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Fasilitas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/fotopanti/dorm3.jpg" style="height: 768px; width: 1366px" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-2 text-white animated slideInDown mb-4">Rumah Yatim & Dhuafa KKMB</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Menyelenggarakan program-program untuk memberdayakan potensi umat maupun anak asuh agar memiliki keterampilan tinggi.</p>
                                    <a href="/about" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Tentang Kami</a>
                                    <a href="/facility" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Fasilitas</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Facilities Start -->
        @include('layout.facility')
        <!-- Facilities End -->


        <!-- About Start -->
        @include('layout.about')
        <!-- About End -->

        <!-- Anak panti Start-->     
        @include('layout.anak')
        <!-- Anal panti End -->

        <!-- Team Start -->
        @include('layout.pengurus')
        <!-- Team End -->

        <!-- Appointment Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Kotak Saran</h1>
                                <form action="/saran" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0" name="gname" placeholder="Name" required>
                                                <label for="gname" name="gname">Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control border-0" name="gmail" placeholder="Email" required>
                                                <label for="gmail" name="gmail">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control border-0" placeholder="Berikan Saran" name="message" style="height: 100px"></textarea>
                                                <label for="message" name="message" >Berikan Saran</label>
                                            </div>
                                        </div>
                                            <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="img/appointment.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Saran</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach($sarans as $saran)
                    <div class="testimonial-item bg-light rounded p-5">
                        <p class="fs-5">{{$saran->message}}</p>
                        <div class="d-flex align-items-center bg-white me-n5" style="border-radius: 50px 0 0 50px;">
                            
                            <div class="ps-3">
                                <h3 class="mb-1">Nama: {{$saran->gname}}</h3>
                            </div>
                            <i class="fa fa-quote-right fa-3x text-primary ms-auto d-none d-sm-flex"></i>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

         <!-- Footer Start -->
         @include('layout.footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>