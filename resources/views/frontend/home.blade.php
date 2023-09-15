@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Home
@endsection
@push('styles')
@endpush

@section('content')

<div class="header header-2">
    <div class="header-wrapper">
        <div class="container">
            <div class="row d-lg-flex align-items-lg-center">
                <div class="col-lg-6 offset-lg-0 order-lg-1 col-md-8 offset-md-2 col-10 offset-1 order-2">
                    <div class="header-content">
                        <h1 class="c-dark">{{ $home_content->banner_title }}</h1>
                        <p class="paragraph-big">{{ $home_content->banner_description }}</p>
                        <div class="button-group">
                            <a href="#" class="button button-green">
                                <span>PICK YOUR PLAN</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-0 order-lg-2 col-md-8 offset-md-2 col-10 offset-1 order-1">
                    <div class="pattern-image pattern-image-reverse">
                        <div class="image wow bounceInUp"  data-wow-delay="0.6s">
                            <img src="{{ asset($home_content->banner_image)}}" alt="phone">
                        </div>
                        <div class="background-layout">
                            <div class="box-1 box-image" style="background-image: url('{{ asset($home_content->banner_back_image)}}');">
                                <div class="box-1-1 bg-yellow wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
                                <div class="box-1-2 bg-blue wow pulse" data-wow-delay="0.9s" data-wow-iteration="infinite"></div>
                            </div>
                            <div class="box-2 bg-red wow shake" data-wow-delay="1.2s" data-wow-iteration="infinite"  data-wow-duration="10000ms">
                                <div class="box-2-1 bg-purple wow pulse" data-wow-delay="0.9s" data-wow-iteration="infinite"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header - end -->

<!-- feature section - start -->
<div class="feature-section" id="about">
    <div class="feature-section-wrapper">
        <!-- heading - start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-section-heading">
                        <h1 class="t-center m-horz-auto c-dark heading-width-res-full heading-width-67">{{ $home_content->section1_main_title }}</h1>
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
                        <h3 class="c-dark">{{ $home_content->section1_1st_title }}</h3>
                        <p>{{ $home_content->section1_1st_details }}</p>
                    </div>
                </div>
                <!-- single - end -->
                <!-- single - start -->
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-section-content  text-center">
                        <i class="fas fa-file-medical-alt c-red icon"></i>
                        <h3 class="c-dark">{{ $home_content->section1_2nd_title }}</h3>
                        <p>{{ $home_content->section1_2nd_details }}</p>
                    </div>
                </div>
                <!-- single - end -->
                <!-- single - start -->
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-section-content  text-center">
                        <i class="fas fa-user-md c-green icon"></i>
                        <h3 class="c-dark">{{ $home_content->section1_3rd_title }}</h3>
                        <p>{{ $home_content->section1_3rd_details }}</p>
                    </div>
                </div>
                <!-- single - end -->
               
            </div>
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="button-group button-group-center">
                        <a href="#" class="button button-red">
                            <span>Get Started</span>
                        </a>
                    </div>
                </div>
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
            <div class="row">
                <!-- image - start -->
                <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="pattern-image">
                        <div class="image">
                            <!-- <img src="assets/images/feature-phone-1.png" alt="phone"> -->
                        </div>
                        <div class="background-layout">
                            <div class="box-1 box-image" style="background-image: url('{{ asset($home_content->section2_image)}}');">
                                <div class="box-1-1 bg-purple wow bounce" data-wow-iteration="infinite"></div>
                                <div class="box-1-2 bg-red wow pulse" data-wow-iteration="infinite"></div>
                            </div>
                            <div class="box-2 bg-yellow wow bounce">
                                <div class="box-2-1 bg-green wow pulse" data-wow-iteration="infinite"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- image - end -->

                <!-- content - start -->
                <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="features-content">
                        <h2 class="c-dark lt-60">{{ $home_content->section2_main_title }}</h2>
                        <p>{{ $home_content->section2_main_description }}</p>
                        <!-- icon text - start -->
                        <div class="icon-text">
                            <div class="icon">
                                <i class="fas fa-shield-alt icon c-green"></i>
                            </div>
                            <div class="content">
                                <h4 class="c-dark">{{ $home_content->section2_1st_title }}</h4>
                                <p>{{ $home_content->section2_1st_details }}</p>
                            </div>
                        </div>
                        <!-- icon text - end -->
                        <!-- icon text - start -->
                        <div class="icon-text">
                            <div class="icon">
                                <i class="fas fa-user-secret icon c-purple"></i>
                            </div>
                            <div class="content">
                                <h4 class="c-dark">{{ $home_content->section2_2nd_title }}</h4>
                                <p>{{ $home_content->section2_2nd_details }}</p>
                            </div>
                        </div>
                        <!-- icon text - end -->
                        <!-- icon text - start -->
                        <div class="icon-text">
                            <div class="icon">
                                <i class="fas fa-notes-medical icon c-blue"></i>
                            </div>
                            <div class="content">
                                <h4 class="c-dark">{{ $home_content->section2_3rd_title }}</h4>
                                <p>{{ $home_content->section2_3rd_details }}</p>
                            </div>
                        </div>
                        <!-- icon text - end -->
                    </div>
                </div>
                <!-- content - end -->
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
                        <h2 class="c-dark lt-60">{{ $home_content->section3_main_title }}</h2>
                        <p>{{ $home_content->section3_main_description }}</p>
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
                                        <h4 class="c-dark">{{ $home_content->section3_1st_title }} </h4>
                                    </button>
                                    </h2>
                                    <div 
                                    id="collapseOne"
                                    class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionFeature">
                                        <div class="accordion-body">
                                            <p>{{ $home_content->section3_1st_description }}</p>
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
                                        <h4 class="c-dark">{{ $home_content->section3_2nd_title }} </h4>
                                    </button>
                                    </h2>
                                    <div 
                                    id="collapseTwo"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionFeature">
                                        <div class="accordion-body">
                                            <p>{{ $home_content->section3_2nd_description }} </p>
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
                                        <h4 class="c-dark">{{ $home_content->section3_3rd_title }}</h4>
                                    </button>
                                    </h2>
                                    <div 
                                    id="collapseThree"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionFeature">
                                        <div class="accordion-body">
                                            <p>{{ $home_content->section3_3rd_description }}</p>
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
                                        <h4 class="c-dark">{{ $home_content->section3_4th_title }} </h4>
                                    </button>
                                    </h2>
                                    <div 
                                    id="collapseFour"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionFeature">
                                        <div class="accordion-body">
                                            <p>{{ $home_content->section3_4th_title }}</p>
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
                                        <h4 class="c-dark">{{ $home_content->section3_5th_title }}</h4>
                                    </button>
                                    </h2>
                                    <div 
                                    id="collapseFive"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingFive" data-bs-parent="#accordionFeature">
                                        <div class="accordion-body">
                                            <p>{{ $home_content->section3_5th_description }}</p>
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
                            <a href="{{ asset($home_content->section4_video_link)}}" class="glightbox">
                                <i class="fas fa-play c-red"></i>
                            </a>
                            <div class="box-1" style="background-image: url('{{ asset($home_content->section4_image1)}}');"></div>
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
                        <h2 class="c-dark lt-60">{{ $home_content->section4_main_title }}</h2>
                        <p>{!! $home_content->section4_main_description !!}</p>
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
<div class="pricing-section" id="pricing">
    <div class="pricing-section-wrapper">
        <div class="container pricing-section-content">
            <!-- heading - start -->
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="heading">
                        <h1 class="lt-80 t-center m-horz-auto c-dark heading-width-res-full heading-width-67">{{ $home_content->section5_title }}</h1>
                    </div>
                </div>
            </div>
            <!-- heading - end -->
            <!-- pricing row - start -->
            <div class="row gx-5">
                <div class="pricing-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- single pricing - start -->
                            <div class="swiper-slide wow fadeInUpBig" data-wow-delay="0.6s">
                                <div class="pricing-single">
                                    <div class="pricing-single-wrapper">
                                        <h3 class="plan c-red">{{ $home_content->section5_1st_content }}</h3>
                                        <h6 class="c-grey">{{ $home_content->section5_1st_content_details }}</h6>
                                        <div class="box bg-red"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- single pricing - end -->
                            <!-- single pricing - start -->
                            <div class="swiper-slide wow fadeInUpBig" data-wow-delay="0.7s">
                                <div class="pricing-single">
                                    <div class="pricing-single-wrapper">
                                        <h3 class="plan c-purple">{{ $home_content->section5_2nd_content }}</h3>
                                        <h6 class="c-grey">{{ $home_content->section5_2nd_content_details }}</h6>
                                        <div class="box bg-purple"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- single pricing - end -->
                            <!-- single pricing - start -->
                            <div class="swiper-slide wow fadeInUpBig" data-wow-delay="0.8s">
                                <div class="pricing-single">
                                    <div class="pricing-single-wrapper">
                                        <h3 class="plan c-blue">{{ $home_content->section5_3rd_content }}</h3>
                                        <h6 class="c-grey">{{ $home_content->section5_3rd_content_details }}</h6>
                                        <div class="box bg-blue"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- single pricing - end -->
                            <!-- single pricing - start -->
                            <div class="swiper-slide wow fadeInUpBig" data-wow-delay="0.9s">
                                <div class="pricing-single">
                                    <div class="pricing-single-wrapper">
                                        <h3 class="plan c-yellow">{{ $home_content->section5_4th_content }}</h3>
                                        <h6 class="c-grey">{{ $home_content->section5_4th_content_details }}</h6>
                                        <div class="box bg-yellow"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- single pricing - end -->
                        </div>
                    </div>
                </div>
            </div>
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
                                <div class="swiper-slide">
                                    <div class="testimonial-slide">
                                        <!-- image - start -->
                                        <div class="image">
                                            <div class="image-inner">
                                                <img src="{{ asset('frontend_assets/assets/images/testimonial-img.jpg')}}" alt="testimonial">
                                                <div class="box-1 bg-dark-1"></div>
                                                <div class="box-2 bg-yellow">
                                                    <div class="box-2-1 bg-dark-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- image - end -->
                                        <!-- content - start -->
                                        <div class="content">
                                            <p class="c-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>

                                            <h3 class="c-white fw-600">Charlie GM</h3>
                                            <h5 class="c-grey-3 lt-24">established fact</h5>
                                        </div>
                                        <!-- content - end -->
                                    </div>
                                </div>
                                <!-- testimonial slide - end -->
                                <!-- testimonial slide - start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-slide">
                                        <!-- image - start -->
                                        <div class="image">
                                            <div class="image-inner">
                                                <img src="{{ asset('frontend_assets/assets/images/testimonial-img.jpg')}}" alt="testimonial">
                                                <div class="box-1 bg-dark-1"></div>
                                                <div class="box-2 bg-yellow">
                                                    <div class="box-2-1 bg-dark-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- image - end -->
                                        <!-- content - start -->
                                        <div class="content">
                                            <p class="c-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>

                                            <h3 class="c-white fw-600">Charlie GM</h3>
                                            <h5 class="c-grey-3 lt-24">established fact</h5>
                                        </div>
                                        <!-- content - end -->
                                    </div>
                                </div>
                                <!-- testimonial slide - end -->
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
                        <h1 class="lt-80 t-center m-horz-auto c-dark heading-width-res-full heading-width-67">{{ $home_content->faq_section_title }}</h1>
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
                            <!-- accordion item - start -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeadingOne">
                                <button 
                                class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faqOne"
                                aria-expanded="true"
                                aria-controls="faqOne">
                                    <h4 class="c-dark">{{ $home_content->faq_1st_question }}</h4>
                                </button>
                                </h2>
                                <div 
                                id="faqOne"
                                class="accordion-collapse collapse show"
                                aria-labelledby="faqHeadingOne" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>{{ $home_content->faq_1st_answer }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- accordion item - end -->
                            <!-- accordion item - start -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeadingTwo">
                                <button 
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faqTwo"
                                aria-expanded="true"
                                aria-controls="faqTwo">
                                    <h4 class="c-dark">{{ $home_content->faq_2nd_question }}</h4>
                                </button>
                                </h2>
                                <div 
                                id="faqTwo"
                                class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>{{ $home_content->faq_2nd_answer }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- accordion item - end -->
                            <!-- accordion item - start -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeadingThree">
                                <button 
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faqThree"
                                aria-expanded="true"
                                aria-controls="faqThree">
                                    <h4 class="c-dark">{{ $home_content->faq_3rd_question }}</h4>
                                </button>
                                </h2>
                                <div 
                                id="faqThree"
                                class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingThree" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>{{ $home_content->faq_3rd_answer }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- accordion item - end -->
                            <!-- accordion item - start -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeadingFour">
                                <button 
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faqFour"
                                aria-expanded="true"
                                aria-controls="faqFour">
                                    <h4 class="c-dark">{{ $home_content->faq_4th_question }}</h4>
                                </button>
                                </h2>
                                <div 
                                id="faqFour"
                                class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingFour" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>{{ $home_content->faq_4th_answer }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- accordion item - end -->
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

<!-- screens section - start -->
<div class="screen-section">
    <div class="screen-section-wrapper">
        <div class="container">
            <!-- heading - start -->
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="heading">
                        <h1 class="lt-80 t-center m-horz-auto c-dark heading-width-res-full heading-width-60">
                            App screenshots for you to review.
                        </h1>
                    </div>
                </div>
            </div>
            <!-- heading - end -->
        </div>
        <!-- screen slider - start -->
        <div class="screen-slider position-relative">
            <div class="screen-slider-wrapper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- screen slide - start -->
                        <div class="swiper-slide">
                            <div class="screen-slide wow flipInY" data-wow-delay="0.3s">
                                <a href=""><img src="{{ asset('frontend_assets/assets/images/screens/screen-image-1.webp')}}" alt="app-screen"></a>
                            </div>
                        </div>
                        <!-- screen slide - end -->
                        <!-- screen slide - start -->
                        <div class="swiper-slide">
                            <div class="screen-slide wow flipInY" data-wow-delay="0.4s">
                                <a href=""><img src="{{ asset('frontend_assets/assets/images/screens/screen-image-2.webp')}}" alt="app-screen"></a>
                            </div>
                        </div>
                        <!-- screen slide - end -->
                        <!-- screen slide - start -->
                        <div class="swiper-slide">
                            <div class="screen-slide wow flipInY" data-wow-delay="0.5s">
                                <a href=""><img src="{{ asset('frontend_assets/assets/images/screens/screen-image-3.webp')}}" alt="app-screen"></a>
                            </div>
                        </div>
                        <!-- screen slide - end -->
                        <!-- screen slide - start -->
                        <div class="swiper-slide">
                            <div class="screen-slide wow flipInY" data-wow-delay="0.6s">
                                <a href=""><img src="{{ asset('frontend_assets/assets/images/screens/screen-image-4.webp')}}" alt="app-screen"></a>
                            </div>
                        </div>
                        <!-- screen slide - end -->
                        <!-- screen slide - start -->
                        <div class="swiper-slide">
                            <div class="screen-slide wow flipInY" data-wow-delay="0.7s">
                                <a href=""><img src="{{ asset('frontend_assets/assets/images/screens/screen-image-5.webp')}}" alt="app-screen"></a>
                            </div>
                        </div>
                        <!-- screen slide - end -->
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
        
    </div>
</div>
<!-- screens section - end -->

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
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure>
                                <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-1.jpg')}}" alt="blog">
                                <div class="date bg-purple">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Take Command of Your Personal and Professional Development.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                <!-- blog single - end -->
                <!-- blog single - start -->
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure>
                                <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">
                                <div class="date bg-blue">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Continuing Medical Education Activities Across the Globe.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                <!-- blog single - end -->
                <!-- blog single - start -->
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure>
                                <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-3.jpg')}}" alt="blog">
                                <div class="date bg-red">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Advanced Search Tags to Filter Based on Specialty and Disease.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                <!-- blog single - end -->
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
                        <h2 class="c-white">{{ $home_content->section6_title }}</h2>
                        <div class="button-group">
                            <a href="#" class="button button-red button-red-hover-white">
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
                        <img src="{{ asset($home_content->section6_image) }}" alt="phone">
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
<!-- cta section - end -->

<!-- contact section - start -->
<div class="contact-section" id="contact">
    <div class="contact-section-wrapper">
        <div class="container">
            <div class="row gx-5">
                <!-- form - start -->
                <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="contact-form position-relative">
                        <div class="contact-form-wrapper bg-light">
                            <h3 class="ls-1 t-center m-horz-auto heading-width-res-full heading-width-92">Want to learn more? Get in touch.</h3>
                            <form>
                                <div class="form-floating">
                                    <input 
                                        type="text"
                                        class="form-control"
                                        id="nameField"
                                        placeholder="Full name"
                                    >
                                    <label for="nameField">Full name</label>
                                </div>
                                <div class="form-floating">
                                    <input 
                                        type="email"
                                        class="form-control"
                                        id="emailField"
                                        placeholder="Email address"
                                    >
                                    <label for="emailField">Email address</label>
                                </div>
                                <div class="form-floating">
                                    <input 
                                        type="text"
                                        class="form-control"
                                        id="messageField"
                                        placeholder="Message"
                                    >
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
                        <div class="box-small box-top-left bg-red wow pulse" data-wow-delay="0.4s" data-wow-iteration="infinite"></div>
                    </div>
                </div>
                <!-- form - end -->
                <!-- cta - start -->
                <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="cta position-relative mt-lg-0 mt-5">
                        <div class="cta-wrapper bg-light">
                            <div class="heading">
                                <h3 class="ls-1 t-center m-horz-auto heading-width-76">Join today and get 20% off your plan.</h3>
                            </div>
                            <div class="image" style="background-image: url('{{ asset('frontend_assets/assets/images/cta-image.jpg')}}');">
                                <!-- <img src="" alt="cta"> -->
                            </div>
                            <a href="#" class="button button-blue">
                                <span>Learn more</span>
                            </a>
                        </div>
                        <div class="box-small box-top-left bg-blue  wow pulse" data-wow-delay="0.8s" data-wow-iteration="infinite"></div>
                    </div>
                </div>
                <!-- cta - end -->
            </div>
        </div>
    </div>
</div>
<!-- contact section - end -->

@endsection