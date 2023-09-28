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
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/glightbox.min.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css">
    <!-- <link rel="stylesheet" href="assets/css/overlay-scrollbars.min.css"> -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/style.css') }}">
    @stack('styles')
</head>


<body>
    <main>
        @include('frontend.includes.header')
        @yield('content')
        <!-- contact section - start -->
        <div class="contact-section " id="contact" style="{{ Request::is('blogs*') ? 'display:none' : '' }}" >
            <div class="contact-section-wrapper">
                <div class="container">
                    <div class="row gx-5">
                        <!-- form - start -->
                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="contact-form position-relative">
                                <div class="contact-form-wrapper bg-light">
                                    <h3 class="ls-1 t-center m-horz-auto heading-width-res-full heading-width-92">Want
                                        to learn more? Get in touch.</h3>
                                    <form>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="nameField"
                                                placeholder="Full name">
                                            <label for="nameField">Full name</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="emailField"
                                                placeholder="Email address">
                                            <label for="emailField">Email address</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="messageField"
                                                placeholder="Message">
                                            <label for="messageField">Message</label>
                                        </div>
                                        <!-- <div class="form-row">
                                    <div class="checkbox">
                                        <input type="checkbox" name="patient" id="patientCheck">
                                        <label for="patientCheck">I'm a Patient</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" name="practitioner" id="practitionerCheck">
                                        <label for="practitionerCheck">I'm a Practitioner</label>
                                    </div>
                                </div> -->
                                        <div class="form-submit mt-3">
                                            <button type="button" class="button button-full-width button-red">
                                                <span>Submit</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-small box-top-left bg-red wow pulse" data-wow-delay="0.4s"
                                    data-wow-iteration="infinite"></div>
                            </div>
                        </div>
                        <!-- form - end -->
                        <!-- cta - start -->
                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="cta position-relative mt-lg-0 mt-5">
                                <div class="cta-wrapper bg-light">
                                    <div class="heading">
                                        <h3 class="ls-1 t-center m-horz-auto heading-width-76">Join today and get 20%
                                            off your plan.</h3>
                                    </div>
                                    <div class="image"
                                        style="background-image: url('{{ asset('frontend_assets/assets/images/cta-image.jpg') }}');">
                                        <!-- <img src="" alt="cta"> -->
                                    </div>
                                    <a href="#" class="button button-blue">
                                        <span>Learn more</span>
                                    </a>
                                </div>
                                <div class="box-small box-top-left bg-blue  wow pulse" data-wow-delay="0.8s"
                                    data-wow-iteration="infinite"></div>
                            </div>
                        </div>
                        <!-- cta - end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- contact section - end -->
        @include('frontend.includes.footer')
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('frontend_assets/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="assets/js/glightbox.min.js"></script> -->
    <!-- <script src="assets/js/overlay-scrollbars.min.js"></script> -->
    <script src="{{ asset('frontend_assets/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
    <script src="{{ asset('frontend_assets/assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
