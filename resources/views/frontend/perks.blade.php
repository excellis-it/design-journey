@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Perks
@endsection
@push('styles')
@endpush

@section('content')

<!--<div class="header">
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="header-content t-center">
                        <h1 class="m-horz-auto heading-width-res-full slider-wrapper">
                            <div class="d-inline-block">Hire the best</div>                                
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
        <div class="screen-slider position-relative">
            <div class="screen-slider-wrapper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="screen-slide wow flipInY" data-wow-delay="0.3s">
                                <a href=""><img src="{{ asset('frontend_assets/assets/images/screens/screen-image-1.webp')}}" alt="app-screen"></a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="screen-slide wow flipInY" data-wow-delay="0.4s">
                                <a href=""><img src="{{ asset('frontend_assets/assets/images/screens/screen-image-2.webp')}}" alt="app-screen"></a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="screen-slide wow flipInY" data-wow-delay="0.5s">
                                <a href=""><img src="{{ asset('frontend_assets/assets/images/screens/screen-image-3.webp')}}" alt="app-screen"></a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="screen-slide wow flipInY" data-wow-delay="0.6s">
                                <a href=""><img src="{{ asset('frontend_assets/assets/images/screens/screen-image-4.webp')}}" alt="app-screen"></a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="screen-slide wow flipInY" data-wow-delay="0.7s">
                                <a href=""><img src="{{ asset('frontend_assets/assets/images/screens/screen-image-5.webp')}}" alt="app-screen"></a>
                            </div>
                        </div>

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

        
    </div>
</div>



<div class="feature-section" id="about">
    <div class="feature-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-section-heading">
                        <h1 class="t-center m-horz-auto c-dark heading-width-res-full heading-width-67">Get your <span class="bg-green-rgba c-green-dark border-rounded">designs</span> done in 1-2 days, not weeks</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gx-5 feature-section-content-row">
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-section-content text-center">
                        <i class="fas fa-file-medical-alt c-yellow icon"></i>
                        <h3 class="c-dark">{{ $home_content->section1_1st_title}}</h3>
                        <p>{{ $home_content->section1_1st_details}}</p>
                    </div>
                </div>

                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-section-content  text-center">
                        <i class="fas fa-file-medical-alt c-red icon"></i>
                        <h3 class="c-dark">{{ $home_content->section1_2nd_title}}</h3>
                        <p>{{ $home_content->section1_2nd_details}}</p>
                    </div>
                </div>

                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-section-content  text-center">
                        <i class="fas fa-user-md c-green icon"></i>
                        <h3 class="c-dark">{{ $home_content->section1_3rd_title}}</h3>
                        <p>{{ $home_content->section1_3rd_details}}</p>
                    </div>
                </div>

               
            </div>
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
</div>



<div class="features features-padding-1" id="features">
    <div class="features-wrapper">
        <div class="container">
            <div class="glide">
                <div class="row align-items-lg-center">

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

                </div>
            </div>
        </div>
    </div>
</div>


<div class="features features-padding-2 position-relative">
    <div class="features-wrapper">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 offset-lg-0 order-lg-1 col-md-8 offset-md-2 col-10 offset-1 order-2 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="features-content">
                        <h2 class="c-dark lt-60">{{ $home_content->section3_title }}</h2>
                        <p>{{ $home_content->section3_detail }}</p>

                        <div class="accordion" id="accordionFeature">
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

                        </div>

                    </div>
                </div>

                <div class="col-lg-6 offset-lg-0 order-lg-2 col-md-8 offset-md-2 col-10 offset-1 order-1">
                    <div class="pattern-image pattern-image-reverse">
                        <div class="image">

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

            </div>
        </div>
    </div>
    <div class="background-layout">
        <div class="box-1 bg-light"></div>
    </div> 
</div>


<div class="video-section">
    <div class="video-section-wrapper">
        <div class="container">
            <div class="row gx-5 align-items-lg-center">
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

                <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="video-section-content">
                        <h2 class="c-dark lt-60">{{ $home_content->section4_title }}</h2>
                        <p>{{ $home_content->section4_detail  }}</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>-->
<!-- video section - end -->



<!-- pricing section - start -->
<div class="pricing-section home-pricing" id="pricing">
    <div class="pricing-section-wrapper">
        <div class="container pricing-section-content">
            <!-- heading - start -->
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="heading">
                        <h1 class="lt-80 t-center m-horz-auto c-dark heading-width-res-full heading-width-67">Benefits of working with  <span class="bg-gregg c-dark-blue border-rounded">Design Journey</span> </h1>
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
</div>
<!-- pricing section - end -->









@endsection