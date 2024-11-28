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
    @include('layout.navbarAdmin')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Daftar Anak Asuh</h1>
            </div>
            <div class="col-sm-6 "></div>
            </div>
            <div class="row g-4"> 
            @foreach($anaks as $anak)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="classes-item">
                        <div class="bg-light rounded-circle w-75 mx-auto p-3">
                            <img class="img-fluid rounded-circle" src="{{$anak->photos}}" alt="">
                        </div>
                        <div class="bg-light rounded p-4 pt-5 mt-n5 text-center"> <!-- Center the content -->
                            <a class="d-block h3 mt-3 mb-4" href="">{{$anak->name}}</a>
                            <div class="mb-4">
                                <h6 class="text-primary mb-1">Usia: {{$anak->age}}</h6>
                            </div>
                            <div class="mb-4">
                                <h6 class="text-primary mb-1">BMI: {{$anak->BMI}}</h6>
                            </div>
                            <div class="d-flex justify-content-center"> <!-- Center the buttons -->
                                <form class="col-sm-4" action="/admin/edit/{{$anak->id}}" method="get">
                                    @csrf
                                    <button class="btn btn-primary rounded-pill py-2 px-4 btn-sm" type="submit">EDIT</button>
                                </form>
                                <form class="col-sm-4" action="/admindelete/{{$anak->id}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-primary rounded-pill py-2 px-4 btn-sm" type="submit">DELETE</button>
                                </form>
                                <form class="col-sm-4" action="/admin/bmiadmin/{{$anak->id}}" method="get">
                                    @csrf
                                    <button class="btn btn-primary rounded-pill py-2 px-4 btn-sm" type="submit">BMI</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>  
            @endforeach
            </div>
        </div>
    </div>

    @include('layout.footer')
</body>
