<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('frontend_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/auth/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
</head>

<body>

    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="{{ asset('frontend_assets/images/frontImg.jpg') }}" alt="">
                <div class="text">
                    <div class="login_logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('frontend_assets/img/invoice_logo2.png') }}"
                                alt="">
                        </a>
                    </div>
                    <!--<h2 class="text-head">BPM PRO</h2>-->
                    <span class="text-1">Quick Invoices</span>
                    <span class="text-2"> For Professionals On The Go</span>
                </div>

                

            </div>
        </div> 
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="login-page-logo d-md-none d-block">
                        <a href="{{ url('/') }}"><img src="{{ asset('frontend_assets/img/invoice_logo1.png') }}" alt=""></a>
                    </div>
                    <div class="title">Login</div>
                    <form action="{{ route('login.check') }}" method="post">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="email" value="{{ old('email') }}" placeholder="Enter email">
                            </div>
                            @if ($errors->has('email'))
                                <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                            @endif

                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Enter password">
                            </div>
                            @if ($errors->has('password'))
                                <div class="error" style="color:red;">{{ $errors->first('password') }}</div>
                            @endif
                            {{-- <div class="text"><a href="#">Forgot password?</a></div> --}}
                            <div class="button input-box">
                                <input type="submit" class="submit" value="Submit">
                            </div>
                            <div class="col-md-12 text-center">
                                <a href="{{ route('forget.password.show') }}" class="forgot_pass" style="color: #007DD9; text-decoration: none;">Forgot Your
                                    Password?</a>
                            </div>
                            <div class="text sign-up-text">Don't have an account? <a href="{{ route('register') }}"
                                    class="sign">Signup now</a></div>
                        </div>
                    </form>
                </div>

            </div>
        </div> 
    </div>
</body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('frontend_assets/js/bootstrap.bundle.min.js')}}"></script>
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
<script>
   $(document).ready(function() {
    $('.submit').click(function() {
        $(this).prop('disabled', true);
         $(this).parents('form').submit();
        
    });
});
</script>
