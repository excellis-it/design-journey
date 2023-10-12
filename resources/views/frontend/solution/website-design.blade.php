@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Website Design
@endsection
@push('styles')
@endpush

@section('content')

    <!-- header - start -->
    <div class="header">
        <div class="header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="header-content t-center">
                            <h1 class="m-horz-auto heading-width-res-full heading-width-83"><span class="c-red">Website & landing page</span> design service</h1>
                            <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">Request as many website and landing page designs as you want for a flat monthly fee. Drive clicks and conversions with professional design.</p>
                            <div class="col-lg-12 wow">
                                <div class="button-group button-group-center">
                                    <a href="#" class="button button-red">
                                        <span>See How It Works</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header - end -->

    <!-- Our Works Sec -->
    <div class="our_works_sec">
        <div class="feature-section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-section-heading">
                            <h1 class="t-center m-horz-auto c-dark heading-width-res-full heading-width-100">Our latest website designs</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="related-posts-content">
                <!-- related posts slider - start -->
                <div class="our-related-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- related posts slide - start -->
                            @foreach ($solution_images as $solution_image)
                                <div class="swiper-slide">
                                    <div class="related-posts-slide">
                                        <div class="blog-single">
                                            <a href="">
                                                <figure>
                                                    <img src="{{ asset($solution_image->image) }}" alt="blog">
                                                    <div class="hover">
                                                        <div class="circle">
                                                            <i class="fas fa-plus"></i>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="slider-pagination related-posts-slider-pagination"></div>
                </div>
                <!-- related posts slider - end -->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="button-group button-group-center">
                            <a href="{{ route('our.work') }}" class="button button-red">
                                <span>All Our Work</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Works Sec -->

    <!-- feature section - start -->
    <div class="feature-section" id="about">
        <div class="feature-section-wrapper">
            <!-- heading - start -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-section-heading">
                            <h1 class="t-center m-horz-auto c-dark heading-width-res-full heading-width-67">Get your designs done in 1-2 days, not weeks</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- heading - end -->
            <!-- content - start -->
            <div class="container">
                <div class="row gx-5 feature-section-content-row">
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp"
                        data-wow-delay="0.2s">
                        <div class="feature-section-content text-center">
                            <i class="fas fa-file-medical-alt c-yellow icon"></i>
                            <h3 class="c-dark">{{ $home_content->section1_1st_title }}</h3>
                            <p>{{ $home_content->section1_1st_details }}</p>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp"
                        data-wow-delay="0.3s">
                        <div class="feature-section-content  text-center">
                            <i class="fas fa-file-medical-alt c-red icon"></i>
                            <h3 class="c-dark">{{ $home_content->section1_2nd_title }}</h3>
                            <p>{{ $home_content->section1_2nd_details }}</p>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp"
                        data-wow-delay="0.4s">
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
                                <div class="box-1 box-image"
                                    style="background-image: url('{{ asset($solutionCms->section1_image) }}');">
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
                    <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp"
                        data-wow-delay="0.4s">
                        <div class="features-content">
                            <h2 class="c-dark lt-60">{{ $solutionCms->section1_title }}</h2>
                            <p>{!! $solutionCms->section1_content !!}</p>
                            <!-- icon text - start -->

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
        <div class="features-wrapper min_height_33">
            <div class="container">
                <div class="row">

                    <!-- content - start -->
                    <div class="col-lg-6 offset-lg-0 order-lg-1 col-md-8 offset-md-2 col-10 offset-1 order-2 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="features-content">
                            <h2 class="c-dark lt-60">{{ $solutionCms->section2_title }}</h2>
                            <p>{{ $solutionCms->section2_content }}</p>
                            <div class="boost_engaments">
                                {{-- <ul>
                                    <li><a href=""><i class="fab fa-facebook"></i> Facebook Ads</a></li>
                                    <li><a href=""><i class="fab fa-instagram-square"></i> Instagram Stories</a></li>
                                    <li><a href=""><i class="fas fa-copy"></i> Carrousel Ads</a></li>
                                    <li><a href=""><i class="fab fa-google"></i> Google Display Ads</a></li>
                                    <li><a href=""><i class="fab fa-pinterest-p"></i> Pinterest Posts</a></li>
                                    <li><a href=""><i class="fab fa-linkedin"></i> LinkedIn Ads</a></li>
                                    <li><a href=""><i class="fab fa-youtube"></i> YouTube Thumbnails</a></li>
                                </ul> --}}
                            </div>
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
                                <div class="box-1 box-image" style="background-image: url('{{ asset($solutionCms->section2_image) }}');">
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

    <!-- feature - start -->
    <div class="features features-padding-2 position-relative">
        <div class="features-wrapper min_height_33">
            <div class="container">
                <div class="row">
                    <!-- content - start -->
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="heading">
                            <h1 class="lt-80 t-center m-horz-auto c-dark heading-width-res-full heading-width-100">Unlimited design vs other solutions</h1>
                        </div>
                    </div>
                    <!-- content - end -->
                </div>

                <div class="compare_table">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">FREELANCER</th>
                                    <th scope="col">IN-HOUSE DESIGNERs</th>
                                    <th scope="col">DESIGN JOURNEY</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row">SHORT-TERM COSTS</th>
                                    <td>{{ $solution->short_freelancer }}</td>
                                    <td>{{ $solution->short_inhouse_designer }}</td>
                                    <td>{{ $solution->short_design_journey }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">LONG-TERM COSTS</th>
                                    <td>{{ $solution->long_freelancer }}</td>
                                    <td>{{ $solution->long_inhouse_designer }}</td>
                                    <td>{{ $solution->long_design_journey }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">FLAT RATES</th>
                                    <td>
                                        @if($solution->flat_rate_freelancer == 1)
                                        <img src="{{ asset('frontend_assets/assets/images/tick.svg') }}"
                                            alt="" />
                                        @else 
                                        <img src="{{ asset('frontend_assets/assets/images/cross.svg') }}"
                                            alt="" />
                                        @endif
                                    </td>
                                    <td>@if($solution->flat_rate_inhouse_designer == 1)
                                        <img src="{{ asset('frontend_assets/assets/images/tick.svg') }}"
                                            alt="" />
                                        @else 
                                        <img src="{{ asset('frontend_assets/assets/images/cross.svg') }}"
                                            alt="" />
                                        @endif</td>

                                    <td>@if($solution->flat_rate_design_journey == 1)
                                        <img src="{{ asset('frontend_assets/assets/images/tick.svg') }}"
                                            alt="" />
                                        @else 
                                        <img src="{{ asset('frontend_assets/assets/images/cross.svg') }}"
                                            alt="" />
                                        @endif</td>
                                </tr>
                                <tr>
                                    <th scope="row">HIRING & ADMIN</th>
                                    <td>{{ $solution->hiring_freelancer }}</td>
                                    <td>{{ $solution->hiring_inhouse_designer }}</td>
                                    <td>{{ $solution->hiring_design_journey }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">VERSTATILE SKILLS</th>
                                    <td>@if($solution->verstatile_freelancer == 1)
                                        <img src="{{ asset('frontend_assets/assets/images/tick.svg') }}"
                                            alt="" />
                                        @else 
                                        <img src="{{ asset('frontend_assets/assets/images/cross.svg') }}"
                                            alt="" />
                                        @endif</td>
                                    <td>@if($solution->verstatile_inhouse_designer == 1)
                                        <img src="{{ asset('frontend_assets/assets/images/tick.svg') }}"
                                            alt="" />
                                        @else 
                                        <img src="{{ asset('frontend_assets/assets/images/cross.svg') }}"
                                            alt="" />
                                        @endif</td>

                                    <td>@if($solution->verstatile_design_journey == 1)
                                        <img src="{{ asset('frontend_assets/assets/images/tick.svg') }}"
                                            alt="" />
                                        @else 
                                        <img src="{{ asset('frontend_assets/assets/images/cross.svg') }}"
                                            alt="" />
                                        @endif</td>
                                </tr>
                                <tr>
                                    <th scope="row">TURNAROUND TIME</th>
                                    <td>{{ $solution->turnaround_freelancer }}</td>
                                    <td>{{ $solution->turnaround_inhouse_designer }}</td>
                                    <td>{{ $solution->turnaround_design_journey }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">FLEXIBLE & SCALABLE</th>
                                    <td>@if($solution->flexible_freelancer == 1)
                                        <img src="{{ asset('frontend_assets/assets/images/tick.svg') }}"
                                            alt="" />
                                        @else 
                                        <img src="{{ asset('frontend_assets/assets/images/cross.svg') }}"
                                            alt="" />
                                        @endif</td>
                                    <td>@if($solution->flexible_inhouse_designer == 1)
                                        <img src="{{ asset('frontend_assets/assets/images/tick.svg') }}"
                                            alt="" />
                                        @else 
                                        <img src="{{ asset('frontend_assets/assets/images/cross.svg') }}"
                                            alt="" />
                                        @endif</td>

                                    <td>@if($solution->flexible_design_journey == 1)
                                        <img src="{{ asset('frontend_assets/assets/images/tick.svg') }}"
                                            alt="" />
                                        @else 
                                        <img src="{{ asset('frontend_assets/assets/images/cross.svg') }}"
                                            alt="" />
                                        @endif</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- feature - end -->

    <!-- pricing section - start -->
    <div class="pricing-section home-pricing" id="pricing">
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
                                    <h3 class="plan c-white mb-5">{{ $home_content->section5_title1 }}</h3>
                                    <h2 class="c-white">{{ $home_content->section5_detail1 }}</h2>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="swiper-slide wow fadeInUpBig" data-wow-delay="0.6s">
                            <div class="pricing-single">
                                <div class="pricing-single-wrapper height-2 border-b">
                                    <h3 class="plan c-purple mb-5">{{ $home_content->section5_title2 }}</h3>
                                    <h2 class="c-grey">{{ $home_content->section5_detail2 }}</h2>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="swiper-slide wow fadeInUpBig" data-wow-delay="0.6s">
                            <div class="pricing-single">
                                <div class="pricing-single-wrapper bg-gregg height-2">
                                    <h3 class="plan c-grey mb-5">{{ $home_content->section5_title3 }}</h3>
                                    <h2 class="c-grey">{{ $home_content->section5_detail3 }}</h2>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="swiper-slide wow fadeInUpBig" data-wow-delay="0.6s">
                            <div class="pricing-single">
                                <div class="pricing-single-wrapper bg-blues-dark height-1">
                                    <h3 class="plan c-white mb-5">{{ $home_content->section5_title4 }}</h3>
                                    <h2 class="c-white">{{ $home_content->section5_detail4 }}</h2>
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
                                <!-- accordion item - start -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqHeadingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                            <h4 class="c-dark">{{ $home_content->frequently_qs1 }}</h4>
                                        </button>
                                    </h2>
                                    <div id="faqOne" class="accordion-collapse collapse show"
                                        aria-labelledby="faqHeadingOne" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p>{{ $home_content->frequently_ans1 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- accordion item - end -->
                                <!-- accordion item - start -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqHeadingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="true"
                                            aria-controls="faqTwo">
                                            <h4 class="c-dark">{{ $home_content->frequently_qs2 }}</h4>
                                        </button>
                                    </h2>
                                    <div id="faqTwo" class="accordion-collapse collapse"
                                        aria-labelledby="faqHeadingTwo" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p>{{ $home_content->frequently_ans2 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- accordion item - end -->
                                <!-- accordion item - start -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqHeadingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="true"
                                            aria-controls="faqThree">
                                            <h4 class="c-dark">{{ $home_content->frequently_qs3 }}</h4>
                                        </button>
                                    </h2>
                                    <div id="faqThree" class="accordion-collapse collapse"
                                        aria-labelledby="faqHeadingThree" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p>{{ $home_content->frequently_ans3 }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- accordion item - end -->
                                <!-- accordion item - start -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="faqHeadingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="true"
                                            aria-controls="faqFour">
                                            <h4 class="c-dark">{{ $home_content->frequently_qs4 }}</h4>
                                        </button>
                                    </h2>
                                    <div id="faqFour" class="accordion-collapse collapse"
                                        aria-labelledby="faqHeadingFour" data-bs-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p>{{ $home_content->frequently_ans4 }}
                                            </p>
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
                            <img src="{{ asset($home_content->service_business_image) }}" alt="phone">
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

    
@endsection