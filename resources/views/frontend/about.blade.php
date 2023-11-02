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
                                    <span class="count" data-count="900">{{ $about_content->customer_serve }}</span>
                                    <span>customers served</span>
                                </li>
                                <li>
                                    <span class="count" data-count="1200">{{ $about_content->design_hours_work }}
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
                                <img src="{{Storage::url($about_content->icon1)}}" alt="">
                            </div>
                            <div class="value-box-text">
                                <div class="heading-2">
                                    <h3>{{ $about_content->title1 }}</h3>
                                    <p>{{ $about_content->details1 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="value-box">
                            <div class="value-box-img">
                                <img src="{{Storage::url($about_content->icon2)}}" alt="">
                            </div>
                            <div class="value-box-text">
                                <div class="heading-2">
                                    <h3>{{ $about_content->title2 }}</h3>
                                    <p>{{ $about_content->details2 }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="value-box">
                            <div class="value-box-img">
                                <img src="{{Storage::url($about_content->icon3)}}" alt="">
                            </div>
                            <div class="value-box-text">
                                <div class="heading-2">
                                    <h3>{{ $about_content->title3 }}</h3>
                                    <p>{{ $about_content->details3 }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="value-box">
                            <div class="value-box-img">
                                <img src="{{Storage::url($about_content->icon4)}}" alt="">
                            </div>
                            <div class="value-box-text">
                                <div class="heading-2">
                                    <h3>{{ $about_content->title4 }}</h3>
                                    <p>{{ $about_content->details4 }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="value-box">
                            <div class="value-box-img">
                                <img src="{{Storage::url($about_content->icon5)}}" alt="">
                            </div>
                            <div class="value-box-text">
                                <div class="heading-2">
                                    <h3>{{ $about_content->title5 }}</h3>
                                    <p>{{ $about_content->details5 }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="value-box">
                            <div class="value-box-img">
                                <img src="{{Storage::url($about_content->icon6)}}" alt="">
                            </div>
                            <div class="value-box-text">
                                <div class="heading-2">
                                    <h3>{{ $about_content->title6 }}</h3>
                                    <p>{{ $about_content->details6 }}
                                    </p>
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
                @foreach($our_teams as $our_team) 
                <div class="col-xl-4">
                    <div class="team-box">
                        <div class="team-box-img">
                            <img src="{{Storage::url($our_team->image)}}}" alt="">
                            <div class="team-box-img-text">
                                <div class="heading-2">
                                    <h3>{{ $our_team->name }}</h3>
                                    <h4>{{ $our_team->designation }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
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