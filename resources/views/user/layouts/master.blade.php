<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="width=device-width,  initial-scale=1,  maximum-scale=1,  shrink-to-fit=no" name="viewport" />
    <title>Design Journey</title>
    <link rel="stylesheet" href="{{ asset('user_assets/bootstrap-5.3/css/bootstrap.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/phosphor-icons"></script>
    <link rel="stylesheet" href="{{ asset('user_assets/css/app.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/css/custom.css')}}" />
    <link rel="stylesheet" href="{{ asset('user_assets/css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body class="">
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('user.includes.header')
            <!--end header-->
            <!--sidebar-wrapper-->
            @include('user.includes.sidebar')
            <!--end sidebar-wrapper-->

            <!--page-wrapper-->
            @yield('content')

            <!--end page-wrapper-->

            <!--footer -->
            @include('user.includes.footer')
        </div>
    </div>


    <script src="{{ asset('user_assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('user_assets/bootstrap-5.3/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('user_assets/js/app.min.js')}}"></script>
    <script src="{{ asset('user_assets/js/scripts.js')}}" async=""></script>
    <script src="{{ asset('user_assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('user_assets/js/custom.js')}}" async=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    @if (Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('message') }}");
    @endif

    @if (Session::has('error'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>

</body>

</html>
