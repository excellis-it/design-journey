<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <!-- title tag -->
    <title>Design Journey</title>

    <!-- stylesheets -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/glightbox.min.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css">
    <!-- <link rel="stylesheet" href="assets/css/overlay-scrollbars.min.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/style.css')}}">
    @stack('styles')
</head>


<body>
    <main>
        @include('frontend.includes.header')
        @yield('content')
        @include('frontend.includes.footer')
    </main>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('frontend_assets/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- <script src="assets/js/glightbox.min.js"></script> -->
    <!-- <script src="assets/js/overlay-scrollbars.min.js"></script> -->
    <script src="{{ asset('frontend_assets/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
    <script src="{{ asset('frontend_assets/assets/js/main.js')}}"></script>
    @stack('scripts')
</body>
</html>    