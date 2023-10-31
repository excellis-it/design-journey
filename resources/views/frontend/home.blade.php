@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Home
@endsection
@push('styles')
@endpush

@section('content')

<div class="header">
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="header-content t-center">
                        <h1 class="m-horz-auto heading-width-res-full slider-wrapper">
                            <div class="d-inline-block">Hire the best</div>                                
                            <!-- <div class="changebox d-inline-block">                                    
                                <span class="c-red slider-text">Web</span><br>
                                <span class="c-blue slider-text">Graphic</span><br>
                                <span class="c-yellow slider-text">Logo</span><br>
                                <span class="c-green slider-text">3D Graphic</span><br>
                            </div>                              -->
                            <div class="text_type" id="text2"></div>
                          <br>                             
                          <div class="d-inline-block">Designer for any job, online.</div>
                        </h1>
                        <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">Scale up your creative content production with a reliable and hassle-free design service.</p>
                        <div class="m-horz-auto position-relative">
                            <div class="banerimg" style="background-image: url('{{ $home_content->banner_image }}'); background-position: center center;
                            background-size: cover; background-repeat: no-repeat;">
                            </div>                                
                            <div class="background-layout">
                                <div class="box-1 bg-blue">
                                    <div class="box-2 bg-green-rgba-8">
                                        
                                    </div>
                                </div>
                                <div class="box-5 bg-blue-rgba-8">
                                    <div class="box-6 bg-grey-5">
                                        <div class="box-7 bg-red"></div>
                                        <div class="box-8 bg-grey-5"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- screens section - start -->
<div class="feature-section">
    <div class="feature-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="heading">
                        <h1 class="lt-80 t-center m-horz-auto c-dark heading-width-res-full heading-width-60">
                            App screenshots for you to review.
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- screen slider - start -->
        <div class="screen-slider position-relative">
            <div class="screen-slider-wrapper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- screen slide - start -->
                        @foreach($screen_shots as $screen_shot)
                        <div class="swiper-slide">
                            <div class="screen-slide wow flipInY" data-wow-delay="0.3s">
                                <a href=""><img src="{{ asset($screen_shot->image)}}" alt="app-screen"></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="background-layout">
                <div class="box-1 bg-green">
                    <div class="box-2 bg-blue">
                        <div class="box-2-1 bg-red wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
                    </div>
                    <div class="box-3 bg-yellow">
                        <div class="box-3-1 bg-purple wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
                    </div>
                </div>     
            </div>
        </div>
        <!-- screen slider - end -->
        <div class="row">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="button-group button-group-center">
                    <a href="{{ route('login') }}" class="button button-red">
                        <span>Get Started</span>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- screens section - end -->

<!-- feature section - start -->
<div class="feature-section" id="about">
    <div class="feature-section-wrapper">
        <!-- heading - start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-section-heading">
                        <h1 class="t-center m-horz-auto c-dark heading-width-res-full heading-width-67">Get your <span class="bg-green-rgba c-green-dark border-rounded">designs</span> done in 1-2 days, not weeks</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- heading - end -->
        <!-- content - start -->
        <div class="container">
            <div class="row gx-5 feature-section-content-row">
                <!-- single - start -->
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-section-content text-center">
                        <i class="fas fa-file-medical-alt c-yellow icon"></i>
                        <h3 class="c-dark">{{ $home_content->section1_1st_title}}</h3>
                        <p>{{ $home_content->section1_1st_details}}</p>
                    </div>
                </div>
                <!-- single - end -->
                <!-- single - start -->
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-section-content  text-center">
                        <i class="fas fa-file-medical-alt c-red icon"></i>
                        <h3 class="c-dark">{{ $home_content->section1_2nd_title}}</h3>
                        <p>{{ $home_content->section1_2nd_details}}</p>
                    </div>
                </div>
                <!-- single - end -->
                <!-- single - start -->
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-section-content  text-center">
                        <i class="fas fa-comment c-green icon"></i>
                        <h3 class="c-dark">{{ $home_content->section1_3rd_title}}</h3>
                        <p>{{ $home_content->section1_3rd_details}}</p>
                    </div>
                </div>
                <!-- single - end -->
               
            </div>
            
        </div>
        <!-- content - end -->
    </div>
</div>
<!-- feature section - end -->

<!-- feature - start -->
<div class="features features-padding-1" id="features">
    <div class="features-wrapper">
        <div class="container">
            <div class="glide">
                <div class="row align-items-lg-center">
                    <!-- image - start -->
                    <div class="col-lg-6">
                        <div class="pattern-image bg_card">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                <li class="glide__slide">
                                    <img
                                    src="{{ asset($home_content->section2_1st_image)}}"
                                    />
                                </li>
                                <li class="glide__slide">
                                    <img
                                    src="{{ asset($home_content->section2_2nd_image)}}"
                                    />
                                </li>
                                <li class="glide__slide">
                                    <img
                                    src="{{ asset($home_content->section2_3rd_image)}}"
                                    />
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- image - end -->

                    <!-- content - start -->
                    <div class="col-lg-6">
                        <div class="glide__bullets features-content ps-5 ms-5" data-glide-el="controls[nav]">
                            <button class="glide__bullet" data-glide-dir="=0">
                                <div class="content">
                                    <h4 class="c-dark">{{ $home_content->section2_1st_title }}</h4>
                                    <p>{{ $home_content->section2_1st_details }}</p>
                                </div>
                            </button>
                            <button class="glide__bullet" data-glide-dir="=1">
                                <div class="content">
                                    <h4 class="c-dark">{{ $home_content->section2_2nd_title }}</h4>
                                    <p>{{ $home_content->section2_2nd_details }}.</p>
                                </div>
                            </button>
                            <button class="glide__bullet" data-glide-dir="=2">
                                <div class="content">
                                    <h4 class="c-dark">{{ $home_content->section2_3rd_title }}</h4>
                                    <p>{{ $home_content->section2_3rd_details }}</p>
                                </div>
                            </button>
                        </div>
                    </div>
                    <!-- content - end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature - end -->

<!-- feature - start -->
<div class="features features-padding-2 position-relative">
    <div class="features-wrapper">
        <div class="container">
            <div class="row">

                <!-- content - start -->
                <div class="col-lg-6 offset-lg-0 order-lg-1 col-md-8 offset-md-2 col-10 offset-1 order-2 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="features-content">
                        <h2 class="c-dark lt-60">{{ $home_content->section3_title }}</h2>
                        <p>{{ $home_content->section3_detail }}</p>
                        <!-- accordion - start -->
                        <div class="accordion" id="accordionFeature">
                            <!-- accordion item - start -->
                            <div class="accordion-item-wrapper">
                                <i class="fas fa-file-medical-alt icon-small c-green"></i>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                    <button 
                                    class="accordion-button"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne"
                                    aria-expanded="true"
                                    aria-controls="collapseOne">
                                        <h4 class="c-dark">{{ $home_content->section3_title1 }}</h4>
                                    </button>
                                    </h2>
                                    <div 
                                    id="collapseOne"
                                    class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionFeature">
                                        <div class="accordion-body">
                                            <p>{{ $home_content->section3_detail1 }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- accordion item - end -->
                            <!-- accordion item - start -->
                            <div class="accordion-item-wrapper">
                                <i class="fas fa-comment-alt icon-small c-blue"></i>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                    <button 
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo"
                                    aria-expanded="true"
                                    aria-controls="collapseTwo">
                                        <h4 class="c-dark">{{ $home_content->section3_title2 }} </h4>
                                    </button>
                                    </h2>
                                    <div 
                                    id="collapseTwo"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionFeature">
                                        <div class="accordion-body">
                                            <p>{{ $home_content->section3_detail2 }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- accordion item - end -->
                            <!-- accordion item - start -->
                            <div class="accordion-item-wrapper">
                                <i class="fas fa-user-nurse icon-small c-pink"></i>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                    <button 
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree"
                                    aria-expanded="true"
                                    aria-controls="collapseThree">
                                        <h4 class="c-dark">{{ $home_content->section3_title3 }} </h4>
                                    </button>
                                    </h2>
                                    <div 
                                    id="collapseThree"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionFeature">
                                        <div class="accordion-body">
                                            <p>{{ $home_content->section3_detail3 }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- accordion item - end -->
                            <!-- accordion item - start -->
                            <div class="accordion-item-wrapper">
                                <i class="fas fa-bell icon-small c-purple"></i>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                    <button 
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour"
                                    aria-expanded="true"
                                    aria-controls="collapseFour">
                                        <h4 class="c-dark">{{ $home_content->section3_title4 }}</h4>
                                    </button>
                                    </h2>
                                    <div 
                                    id="collapseFour"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionFeature">
                                        <div class="accordion-body">
                                            <p>{{ $home_content->section3_detail4 }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- accordion item - end -->
                            <!-- accordion item - start -->
                            <div class="accordion-item-wrapper">
                                <i class="fas fa-capsules icon-small c-yellow"></i>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                    <button 
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive"
                                    aria-expanded="true"
                                    aria-controls="collapseFive">
                                        <h4 class="c-dark">{{ $home_content->section3_title5 }}</h4>
                                    </button>
                                    </h2>
                                    <div 
                                    id="collapseFive"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionFeature">
                                        <div class="accordion-body">
                                            <p>{{ $home_content->section3_detail5 }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- accordion item - end -->
                        </div>
                        <!-- accordion - end -->
                    </div>
                </div>
                <!-- content - end -->

                <!-- image - start -->
                <div class="col-lg-6 offset-lg-0 order-lg-2 col-md-8 offset-md-2 col-10 offset-1 order-1">
                    <div class="pattern-image pattern-image-reverse">
                        <div class="image">
                            <!-- <img src="assets/images/feature-phone-2.png" alt="phone"> -->
                        </div>
                        <div class="background-layout">
                            <div class="box-1 box-image" style="background-image: url('{{ asset($home_content->section3_image)}}');">
                                <div class="box-1-1 bg-purple wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
                                <div class="box-1-2 bg-red wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
                            </div>
                            <div class="box-2 bg-green">
                                <div class="box-2-1 bg-yellow wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- image - end -->

            </div>
        </div>
    </div>
    <div class="background-layout">
        <div class="box-1 bg-light"></div>
    </div> 
</div>
<!-- feature - end -->

<!-- video section - start -->
<div class="video-section">
    <div class="video-section-wrapper">
        <div class="container">
            <div class="row gx-5 align-items-lg-center">
                <!-- video - start -->
                <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="video-layout">
                        <div class="icon">
                            <a href="{{ $home_content->section4_video_link }}" class="glightbox">
                                <i class="fas fa-play c-red"></i>
                            </a>
                            <div class="box-1" style="background-image: url('{{ asset($home_content->section4_image1) }}');"></div>
                            <div class="box-2" style="background-image: url('{{ asset($home_content->section4_image2)}}');">
                                <div class="box-8 bg-blue wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
                                <div class="box-9 bg-yellow">
                                    <div class="box-10 bg-grey-5 wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
                                </div>
                            </div>
                            <div class="box-3" style="background-image: url('{{ asset($home_content->section4_image3)}}');">
                                <div class="box-7 bg-red wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite">
                                    <div class="box-11 bg-grey-5"></div>
                                </div>
                            </div>
                            <div class="box-4" style="background-image: url('{{ asset($home_content->section4_image4)}}');">
                                <div class="box-5 bg-green wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
                                <div class="box-6 bg-grey-5 wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- video - end -->
                <!-- content - start -->
                <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="video-section-content">
                        <h2 class="c-dark lt-60">{{ $home_content->section4_title }}</h2>
                        <p>{{ $home_content->section4_detail  }}</p>
                        <!-- <div class="button-group">
                            <a href="#" class="button button-purple">
                                <span>Get Started</span>
                            </a>
                            <a href="#" class="button button-light">
                                <span>Learn More</span>
                            </a>
                        </div> -->
                    </div>
                </div>
                <!-- content - end -->
            </div>
        </div>
    </div>
</div>
<!-- video section - end -->



<!-- pricing section - start -->
{{-- <div class="pricing-section home-pricing" id="pricing">
    <div class="pricing-section-wrapper">
        <div class="container pricing-section-content">
            <!-- heading - start -->
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="heading">
                        <h1 class="lt-80 t-center m-horz-auto c-dark heading-width-res-full heading-width-67">A <span class="bg-gregg c-dark-blue border-rounded">design solution</span> you will love</h1>
                    </div>
                </div>
            </div>
            <!-- heading - end -->
            <!-- pricing row - start -->
            <ul class="four_box_bh">
                <li class="">                        
                    <div class="swiper-slide wow fadeInUpBig" data-wow-delay="0.6s">
                        <div class="pricing-single">
                            <div class="pricing-single-wrapper bg-blues height-1">
                                <h3 class="plan c-white mb-5">{{ $home_content->section5_title1  }}</h3>
                                <h2 class="c-white">{{ $home_content->section5_detail1 }}</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="">                        
                    <div class="swiper-slide wow fadeInUpBig" data-wow-delay="0.6s">
                        <div class="pricing-single">
                            <div class="pricing-single-wrapper height-2 border-b">
                                <h3 class="plan c-purple mb-5">{{ $home_content->section5_title2  }}</h3>
                                <h2 class="c-grey">{{ $home_content->section5_detail2 }}</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="">                        
                    <div class="swiper-slide wow fadeInUpBig" data-wow-delay="0.6s">
                        <div class="pricing-single">
                            <div class="pricing-single-wrapper bg-gregg height-2">
                                <h3 class="plan c-grey mb-5">{{ $home_content->section5_title3  }}</h3>
                                <h2 class="c-grey">{{ $home_content->section5_detail3 }}</h2>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="">                        
                    <div class="swiper-slide wow fadeInUpBig" data-wow-delay="0.6s">
                        <div class="pricing-single">
                            <div class="pricing-single-wrapper bg-blues-dark height-1">
                                <h3 class="plan c-white mb-5">{{ $home_content->section5_title4  }}</h3>
                                <h2 class="c-white">{{ $home_content->section5_detail4  }}</h2>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- pricing row - end -->
        </div>
        <div class="background-layout">
            <div class="box-1 bg-light"></div>
            <div class="box-2 bg-red">
                <div class="box-2-1 bg-purple"></div>
            </div>
        </div>
    </div>
</div> --}}
<!-- pricing section - end -->


<!-- testimonial section - start -->
<div class="testimonial-section">
    <div class="testimonial-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <!-- testimonial slider - start -->
                    <div class="testimonial-slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- testimonial slide - start -->
                                @foreach($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="testimonial-slide">
                                        <!-- image - start -->
                                        <div class="image">
                                            <div class="image-inner">
                                                <img src="{{ asset($testimonial->image) }}" alt="testimonial">
                                                <div class="box-1 bg-dark-1"></div>
                                                <div class="box-2 bg-yellow">
                                                    <div class="box-2-1 bg-dark-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- image - end -->
                                        <!-- content - start -->
                                        <div class="content">
                                            <p class="c-white">{{ $testimonial->message }}</p>

                                            <h3 class="c-white fw-600">{{ $testimonial->name }}</h3>
                                    

                                            <h5 class="c-grey-3 lt-24">{{ $testimonial->created_at->format('d-M-y') }}</h5>
                                        </div>
                                        <!-- content - end -->
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="slider-pagination testimonial-slider-pagination"></div>
                    </div>
                    <!-- testimonial slider - end -->
                </div>
            </div>
        </div>
        <div class="background-layout">
            <div class="box-1 bg-darkk">
                <div class="box-1-1 bg-dark-1">
                    <div class="box-1-1-1 bg-dark-1 wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
                </div>
            </div>
            <div class="box-2 bg-blue">
                <div class="box-2-1 bg-red wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
            </div>
            <div class="box-3 bg-yellow">
                <div class="box-3-1 bg-purple wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial section - end -->


<!-- faq section - start -->
<div class="faq-section">
    <div class="faq-section-wrapper">
        <div class="container">
            <!-- heading - start -->
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="heading">
                        <h1 class="lt-80 t-center m-horz-auto c-dark heading-width-res-full heading-width-67">Some frequently asked questions.</h1>
                    </div>
                </div>
            </div>
            <!-- heading - end -->
            <!-- content - start -->
            <div class="row">
                <div class="col-md-8 offset-md-2 col-10 offset-1">
                    <div class="faq-section-content">
                        <!-- accordion - start -->
                        <div class="accordion accordion-1" id="accordionFAQ">
                            @foreach($faqs as $key => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeading{{ $key }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $key }}" aria-expanded="false" aria-controls="faq{{ $key }}">
                                        <h4 class="c-dark">{{ $faq->question }}</h4>
                                    </button>
                                </h2>
                                <div id="faq{{ $key }}" class="accordion-collapse collapse" aria-labelledby="faqHeading{{ $key }}" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>{{ $faq->answer }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- accordion - end -->
                    </div>
                </div>
            </div>
            <!-- content - end -->
        </div>
    </div>
</div>
<!-- faq section - end -->





<!-- blog section - start -->
<div class="blog-section" id="blog">
    <div class="blog-section-wrapper">
        <div class="container">
            <!-- heading - start -->
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="heading">
                        <h1 class="t-center m-horz-auto c-dark heading-width-res-full heading-width-56">
                            Read latest news from our blog.
                        </h1>
                    </div>
                </div>
            </div>
            <!-- heading - end -->
            <!-- blog - start -->
            <div class="row blog-row gx-5">
                <!-- blog single - start -->
                @foreach($blogs as $blog)
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-single">
                        <a href="{{ route('blog-details',encrypt($blog->id)) }}">
                            <figure>
                                <img src="{{ asset($blog->main_image)}}" alt="blog">
                                <div class="date bg-purple">
                                    <p class="c-white">
                                        {{ $blog->created_at->format('d') }}
                                        <span>{{ $blog->created_at->format('M') }}</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="{{ route('blog-details',encrypt($blog->id)) }}">
                            <h3 class="c-dark">{{ $blog->title }}</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                @endforeach
                
                
            </div>
            <!-- blog - end -->
        </div>
    </div>
</div>
<!-- blog section - end -->

<!-- cta section - start -->
<div class="cta-section position-relative">
    <div class="cta-section-wrapper">
        <div class="container">
            <div class="row d-lg-flex align-items-lg-center">
                <!-- content - start -->
                <div class="col-lg-6 offset-lg-0 order-lg-1 col-md-8 offset-md-2 col-10 offset-1 order-2">
                    <div class="cta-section-content">
                        <h2 class="c-white">{{ $home_content->service_business_title }}</h2>
                        <div class="button-group">
                            <a href="{{ route('login') }}" class="button button-red button-red-hover-white">
                                <span>Get Started</span>
                            </a>
                            <!-- <a href="#" class="button button-purple button-purple-hover-white">
                                <span>Learn More</span>
                            </a> -->
                        </div>
                    </div>
                </div>
                <!-- content - end -->
                <!-- image - start -->
                <div class="col-lg-6 offset-lg-0 order-lg-2 col-md-8 offset-md-2 col-10 offset-1 order-1">
                    <div class="cta-section-image">
                        <img src="{{ asset($home_content->service_business_image)}}" alt="phone">
                        <!-- <div class="box-1 bg-green-rgba-8">
                            <div class="box-2 bg-purple">
                                <div class="box-2-1 bg-dark-1"></div>
                            </div>
                            <div class="box-3 bg-dark-1"></div>
                        </div> -->
                        <div class="box-4 bg-red-rgba-8">
                            <div class="box-5 bg-dark-1">
                                <div class="box-6 bg-blue">
                                    <div class="box-7 bg-dark-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- image - end -->
            </div>
        </div>
    </div>
    <div class="background-layout">
        <div class="box-1 bg-darkk">
            <div class="box-1-1 bg-dark-1">
                <div class="box-1-1-1 bg-dark-1 wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
            </div>
            <div class="box-2 bg-green">
                <div class="box-2-1 bg-red wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
            </div>
            <div class="box-3 bg-yellow">
                <div class="box-3-1 bg-blue wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
            </div>
        </div>
    </div>
</div>





@endsection