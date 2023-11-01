@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Home
@endsection
@push('styles')
@endpush

@section('content')
<section class="about-section">
    <div class="container">
        <div class="about-section-wrap">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-12">
                    <div class="about-img"  data-aos="fade-up"
                    data-aos-duration="800">
                        <img src="{{ asset('frontend_assets/assets/images/about-us.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="about-text"  data-aos="fade-up"
                    data-aos-duration="1000">
                        <div class="features-content">
                            <h2 class="c-dark lt-60">{{ $about_content->title }}</h2>
                            <p>{{ $about_content->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="counter-section">
    <div class="container">
        <div class="counter-section-wrap">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-5">
                    <div class="about-text">
                        <div class="features-content">
                            <h2 class="c-dark lt-60">Design-journey in numbers</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="counter-number">
                        <div class="counter_js">
                            <ul id="counter">
                                <li>
                                    <span class="count" data-count="900">3,000+</span>
                                    <span>customers served</span>
                                </li>
                                <li>
                                    <span class="count" data-count="1200">1.7+ mil
                                    </span>
                                    <span>design hours worked</span>
                                </li>
                                <!-- <li>
                                    <span class="count" data-count="900">3,000+</span>
                                    <span>customers served</span>
                                </li>
                                <li>
                                    <span class="count" data-count="1200">1.7+ mil
                                    </span>
                                    <span>design hours worked</span>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-value">
    <div class="container">
        <div class="our-value-wrap">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="heading-1 text-center">
                        <h2>Our Values</h2>
                    </div>
                </div>
            </div>
            <div class="value-box-wrap">
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="value-box">
                            <div class="value-box-img">
                                <img src="{{ asset('frontend_assets/assets/images/vl-1.svg')}}" alt="">
                            </div>
                            <div class="value-box-text">
                                <div class="heading-2">
                                    <h3>Customer first</h3>
                                    <p>Taste can be subjective, so we’re never happy with the results unless you
                                        are.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="value-box">
                            <div class="value-box-img">
                                <img src="{{ asset('frontend_assets/assets/images/vl-2.svg')}}" alt="">
                            </div>
                            <div class="value-box-text">
                                <div class="heading-2">
                                    <h3>Urgency and focus</h3>
                                    <p>We produce high-quality results fast, and always work to deliver our best.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="value-box">
                            <div class="value-box-img">
                                <img src="{{ asset('frontend_assets/assets/images/vl-3.svg')}}" alt="">
                            </div>
                            <div class="value-box-text">
                                <div class="heading-2">
                                    <h3>Lead the way</h3>
                                    <p>We don’t settle for the status quo and strive to innovate relentlessly.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="value-box">
                            <div class="value-box-img">
                                <img src="{{ asset('frontend_assets/assets/images/vl-4.svg')}}" alt="">
                            </div>
                            <div class="value-box-text">
                                <div class="heading-2">
                                    <h3>Great design is not a luxury</h3>
                                    <p>Proving every day that design can be high-quality, fast and affordable.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="value-box">
                            <div class="value-box-img">
                                <img src="{{ asset('frontend_assets/assets/images/vl-5.svg')}}" alt="">
                            </div>
                            <div class="value-box-text">
                                <div class="heading-2">
                                    <h3>Work as a team...</h3>
                                    <p>Great results can only be achieved by great teamwork.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="value-box">
                            <div class="value-box-img">
                                <img src="{{ asset('frontend_assets/assets/images/vl-6.svg')}}" alt="">
                            </div>
                            <div class="value-box-text">
                                <div class="heading-2">
                                    <h3>...and celebrate together</h3>
                                    <p>We win as a team and make sure our successes don’t go unoticed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-team-sec">
    <div class="container">
        <div class="our-team-sec-wrap">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="heading-1 text-center">
                        <h2>Our Team</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-box-wrap">
            <div class="row">
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-1.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Customer first</h3>
                                    <h4>CEO</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-2.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Maria Marselina</h3>
                                    <h4>Project Manager</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-3.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Kevin Justal</h3>
                                    <h4>Software Developer</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-4.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Teddy Martadinata</h3>
                                    <h4>Graphic & Web Designer</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-1.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Customer first</h3>
                                    <h4>CEO</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-2.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Maria Marselina</h3>
                                    <h4>Project Manager</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-3.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Kevin Justal</h3>
                                    <h4>Software Developer</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-4.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Teddy Martadinata</h3>
                                    <h4>Graphic & Web Designer</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-1.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Customer first</h3>
                                    <h4>CEO</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-2.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Maria Marselina</h3>
                                    <h4>Project Manager</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-3.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Kevin Justal</h3>
                                    <h4>Software Developer</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-4.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Teddy Martadinata</h3>
                                    <h4>Graphic & Web Designer</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-1.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Customer first</h3>
                                    <h4>CEO</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-2.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Maria Marselina</h3>
                                    <h4>Project Manager</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-3.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Kevin Justal</h3>
                                    <h4>Software Developer</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-4.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Teddy Martadinata</h3>
                                    <h4>Graphic & Web Designer</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-1.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Customer first</h3>
                                    <h4>CEO</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-2.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Maria Marselina</h3>
                                    <h4>Project Manager</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-3.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Kevin Justal</h3>
                                    <h4>Software Developer</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-4.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Teddy Martadinata</h3>
                                    <h4>Graphic & Web Designer</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{ asset('frontend_assets/assets/images/team-3.jpg')}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>Kevin Justal</h3>
                                    <h4>Software Developer</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="interest-sec">
    <div class="container">
        <div class="interest-sec-wrap">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10">
                    <div class="interest-text">
                        <div class="heading-1 text-center">
                            <h2>Interested in joining us?
                                Check out our open positions.</h2>
                        </div>
                        <div class="text-center mt-5">
                            <a href="{{route('career')}}" class="button button-blue">
                                <span>VIEW OPENINGS</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection