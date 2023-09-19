@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Home
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
                            <h1 class="m-horz-auto heading-width-res-full heading-width-83"><span class="c-red">Social media</span> design service</h1>
                            <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">Level up your social media game with gorgeous graphics. Get everything you need with one affordable design subscription.</p>
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
                        <h1 class="t-center m-horz-auto c-dark heading-width-res-full heading-width-100">Our latest social media designs</h1>
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
                        <div class="swiper-slide">
                            <div class="related-posts-slide">
                                <div class="blog-single">
                                    <a href="">
                                        <figure>
                                            <img src="{{ asset('frontend_assets/assets/images/our_works/our_work.jpeg')}}" alt="blog">                                                    
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
                        <!-- related posts slide - end -->
                        <!-- related posts slide - start -->
                        <div class="swiper-slide">
                            <div class="related-posts-slide">
                                <div class="blog-single">
                                    <a href="">
                                        <figure>
                                            <img src="{{ asset('frontend_assets/assets/images/our_works/our_work1.jpeg')}}" alt="blog">                                                    
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
                        <!-- related posts slide - end -->
                        <!-- related posts slide - start -->
                        <div class="swiper-slide">
                            <div class="related-posts-slide">
                                <div class="blog-single">
                                    <a href="">
                                        <figure>
                                            <img src="{{ asset('frontend_assets/assets/images/our_works/our_work2.jpeg')}}" alt="blog">                                                    
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
                        <!-- related posts slide - end -->
                        <!-- related posts slide - start -->
                        <div class="swiper-slide">
                            <div class="related-posts-slide">
                                <div class="blog-single">
                                    <a href="">
                                        <figure>
                                            <img src="{{ asset('frontend_assets/assets/images/our_works/our_work3.jpeg')}}" alt="blog">                                                    
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
                        <!-- related posts slide - end -->
                        <!-- related posts slide - start -->
                        <div class="swiper-slide">
                            <div class="related-posts-slide">
                                <div class="blog-single">
                                    <a href="">
                                        <figure>
                                            <img src="{{ asset('frontend_assets/assets/images/our_works/our_work4.jpeg')}}" alt="blog">                                                    
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
                        <!-- related posts slide - end -->
                        <!-- related posts slide - start -->
                        <div class="swiper-slide">
                            <div class="related-posts-slide">
                                <div class="blog-single">
                                    <a href="">
                                        <figure>
                                            <img src="{{ asset('frontend_assets/assets/images/our_works/our_work3.jpeg')}}" alt="blog">                                                    
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
                        <!-- related posts slide - end -->
                        
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
                        <a href="#" class="button button-red">
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
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="feature-section-content text-center">
                        <i class="fas fa-file-medical-alt c-yellow icon"></i>
                        <h3 class="c-dark">Submit your request</h3>
                        <p>Let us know what you need. Share references and upload your brand assets.</p>
                    </div>
                </div>
                <!-- single - end -->
                <!-- single - start -->
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-section-content  text-center">
                        <i class="fas fa-file-medical-alt c-red icon"></i>
                        <h3 class="c-dark">Your designers gets to work</h3>
                        <p>Get instantly matched with the best designers for the job.</p>
                    </div>
                </div>
                <!-- single - end -->
                <!-- single - start -->
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-section-content  text-center">
                        <i class="fas fa-user-md c-green icon"></i>
                        <h3 class="c-dark">Receive your design</h3>
                        <p>Give us your feedback. We will revise your designs as many times as needed.</p>
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
                            <div class="box-1 box-image" style="background-image: url('{{ asset('frontend_assets/assets/images/ssss.jpg')}}');">
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
                        <h2 class="c-dark lt-60">Manage everything from one simple platform</h2>
                        <p>Finding quality and reliable freelancers takes a lot of time and luck. In-house hires are expensive and can create HR drama.</p>
                        <!-- icon text - start -->
                        <div class="icon-text">
                            <div class="content">
                                <h4 class="c-dark">Submit and prioritize your requests</h4>
                                <h4 class="c-dark">Manage your different brands</h4>
                                <h4 class="c-dark">Communicate directly with your designer</h4>
                                <h4 class="c-dark">Invite your team and collaborate together</h4>
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
    <div class="features-wrapper min_height_33">
        <div class="container">
            <div class="row">

                <!-- content - start -->
                <div class="col-lg-6 offset-lg-0 order-lg-1 col-md-8 offset-md-2 col-10 offset-1 order-2 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="features-content">
                        <h2 class="c-dark lt-60">Boost engagement with eye-catching graphics</h2>
                        <p>ManyPixels provides you with vetted designers for a flat monthly fee. No hiring, no contracts, no stress.</p>
                        <div class="boost_engaments">
                            <ul>
                                <li><a href=""><i class="fab fa-facebook"></i> Facebook Ads</a></li>
                                <li><a href=""><i class="fab fa-instagram-square"></i> Instagram Stories</a></li>
                                <li><a href=""><i class="fas fa-copy"></i> Carrousel Ads</a></li>
                                <li><a href=""><i class="fab fa-google"></i> Google Display Ads</a></li>
                                <li><a href=""><i class="fab fa-pinterest-p"></i> Pinterest Posts</a></li>
                                <li><a href=""><i class="fab fa-linkedin"></i> LinkedIn Ads</a></li>
                                <li><a href=""><i class="fab fa-youtube"></i> YouTube Thumbnails</a></li>
                            </ul>
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
                            <div class="box-1 box-image" style="background-image: url('{{ asset('frontend_assets/assets/images/ss.jpg')}}');">
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
                            <th scope="col">DESIGN AGENCY</th>
                                <th scope="col">MANYPIXELS</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">SHORT-TERM COSTS</th>
                            <td>Affordable</td>
                            <td>Expensive</td>
                            <td>Very Expensive</td>
                            <td>Affordable</td>
                          </tr>
                          <tr>
                            <th scope="row">LONG-TERM COSTS</th>
                            <td>Affordable</td>
                            <td>Very Expensive</td>
                            <td>Very Expensive</td>
                            <td>Affordable</td>
                          </tr>
                          <tr>')}}
                            <th scope="row">FLAT RATES</th>
                            <td><img src="{{ asset('frontend_assets/assets/images/cross.svg')}}" alt=""/></td>
                            <td><img src="{{ asset('frontend_assets/assets/images/tick.svg')}}" alt=""/></td>
                            <td><img src="{{ asset('frontend_assets/assets/images/cross.svg')}}" alt=""/></td>
                            <td><img src="{{ asset('frontend_assets/assets/images/tick.svg')}}" alt=""/></td>
                          </tr>
                          <tr>
                            <th scope="row">HIRING & ADMIN</th>
                            <td>Difficult</td>
                            <td>Difficult</td>
                            <td>Easy</td>
                            <td>Very Easy</td>
                          </tr>
                          <tr>
                            <th scope="row">VERSTATILE SKILLS</th>
                            <td><img src="{{ asset('frontend_assets/assets/images/tick.svg')}}" alt=""/></td>
                            <td><img src="{{ asset('frontend_assets/assets/images/cross.svg')}}" alt=""/></td>
                            <td><img src="{{ asset('frontend_assets/assets/images/tick.svg')}}" alt=""/></td>
                            <td><img src="{{ asset('frontend_assets/assets/images/tick.svg')}}" alt=""/></td>
                          </tr>
                          <tr>
                            <th scope="row">TURNAROUND TIME</th>
                            <td>Slow</td>
                            <td>Quick</td>
                            <td>Slow</td>
                            <td>1-2 Business Days</td>
                          </tr>
                          <tr>
                            <th scope="row">FLEXIBLE & SCALABLE</th>
                            <td><img src="{{ asset('frontend_assets/assets/images/cross.svg')}}" alt=""/></td>
                            <td><img src="{{ asset('frontend_assets/assets/images/cross.svg')}}" alt=""/></td>
                            <td><img src="{{ asset('frontend_assets/assets/images/cross.svg')}}" alt=""/></td>
                            <td><img src="{{ asset('frontend_assets/assets/images/tick.svg')}}" alt=""/></td>
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
<div class="pricing-section" id="pricing">
    <div class="pricing-section-wrapper">
        <div class="container pricing-section-content">
            <!-- heading - start -->
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="heading">
                        <h1 class="lt-80 t-center m-horz-auto c-dark heading-width-res-full heading-width-67">A design solution you will love</h1>
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
                                        <h3 class="plan c-red">Fast & Reliable</h3>
                                        <h6 class="c-grey">Get your design back in 1-2 business days.</h6>
                                        <div class="box bg-red"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- single pricing - end -->
                            <!-- single pricing - start -->
                            <div class="swiper-slide wow fadeInUpBig" data-wow-delay="0.7s">
                                <div class="pricing-single">
                                    <div class="pricing-single-wrapper">
                                        <h3 class="plan c-purple">Fixed Monthly Rate</h3>
                                        <h6 class="c-grey">Work with battle-tested professionals only.</h6>
                                        <div class="box bg-purple"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- single pricing - end -->
                            <!-- single pricing - start -->
                            <div class="swiper-slide wow fadeInUpBig" data-wow-delay="0.8s">
                                <div class="pricing-single">
                                    <div class="pricing-single-wrapper">
                                        <h3 class="plan c-blue">Professional Designers</h3>
                                        <h6 class="c-grey">Work with battle-tested professionals only.</h6>
                                        <div class="box bg-blue"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- single pricing - end -->
                            <!-- single pricing - start -->
                            <div class="swiper-slide wow fadeInUpBig" data-wow-delay="0.9s">
                                <div class="pricing-single">
                                    <div class="pricing-single-wrapper">
                                        <h3 class="plan c-yellow">Flexible & Scalable</h3>
                                        <h6 class="c-grey">No contracts. Scale up or down as you go.</h6>
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
                                <button 
                                class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#faqOne"
                                aria-expanded="true"
                                aria-controls="faqOne">
                                    <h4 class="c-dark">Read necessary information before visits</h4>
                                </button>
                                </h2>
                                <div 
                                id="faqOne"
                                class="accordion-collapse collapse show"
                                aria-labelledby="faqHeadingOne" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>Prepare questions that the patient should answer when registering for an online consultation. We will send them to him before the visit in the form of a survey to which he will also be able to attach his research results.</p>
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
                                    <h4 class="c-dark">Automatic SMS reminders</h4>
                                </button>
                                </h2>
                                <div 
                                id="faqTwo"
                                class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>Prepare questions that the patient should answer when registering for an online consultation. We will send them to him before the visit in the form of a survey to which he will also be able to attach his research results.</p>
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
                                    <h4 class="c-dark">A unique link for each patient</h4>
                                </button>
                                </h2>
                                <div 
                                id="faqThree"
                                class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingThree" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>Prepare questions that the patient should answer when registering for an online consultation. We will send them to him before the visit in the form of a survey to which he will also be able to attach his research results.</p>
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
                                    <h4 class="c-dark">Informing you about new possibilities</h4>
                                </button>
                                </h2>
                                <div 
                                id="faqFour"
                                class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingFour" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>Prepare questions that the patient should answer when registering for an online consultation. We will send them to him before the visit in the form of a survey to which he will also be able to attach his research results.</p>
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
                        <h2 class="c-white">Serving Businesses of Every Size with Digital and Print Designs</h2>
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
                        <img src="{{ asset('frontend_assets/assets/images/cta-phone.png')}}" alt="phone">
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