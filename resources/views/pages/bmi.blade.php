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

</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    @include('layout.spinner')
    <!-- Spinner End -->

    <!-- Navbar Start -->
    @include('layout.navbar')
    <!-- Navbar End -->


    <div class="mx-auto">
    <h3 class="text-center my-3">BMI Calculator</h3>
    <form class="col-3 mx-auto" action='/prosesBmi' method="POST">
    @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama"required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Umur</label>
            <input type="number" class="form-control" name="age" min="0" max="500" required/>
        </div>
        <div class="mb-3">
            <span>Gender</span>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender1" value="male" >
                <label class="form-check-label" for="gender1">
                    Laki-laki
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender2" value="female" >
                <label class="form-check-label" for="gender2">
                    Perempuan
                </label>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tinggi badan</label>
            <input type="number" class="form-control" name="height" min="0" max="500" required />
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Berat badan</label>
            <input type="number" class="form-control" name="weight" min="0" max="500" required/>
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-primary" name="btn">Calculate BMI</button>
        </div>

    </form>
</div>

    
    
        @include('layout.footer')


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>
    <!-- Template Javascript -->
</body>

</html>