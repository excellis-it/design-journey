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
                            <h1 class="m-horz-auto heading-width-res-full heading-width-83">Some frequently asked questions.</h1>
                            <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">Check out some of
                                the latest creations we did for our customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header - end -->


<!-- faq section - start -->
<div class="faq-section">
    <div class="faq-section-wrapper pt-0 pb-0 inner-faq">
        <div class="container">
            <!-- content - start -->
            <div class="row">
                <div class="col-md-12 col-12">
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
                                    <h4 class="c-dark">{{ $home_content->frequently_qs1  }}</h4>
                                </button>
                                </h2>
                                <div 
                                id="faqOne"
                                class="accordion-collapse collapse show"
                                aria-labelledby="faqHeadingOne" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>{{ $home_content->frequently_ans1  }}</p>
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
                                    <h4 class="c-dark">{{ $home_content->frequently_qs2  }}</h4>
                                </button>
                                </h2>
                                <div 
                                id="faqTwo"
                                class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingTwo" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>{{ $home_content->frequently_ans2  }}</p>
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
                                    <h4 class="c-dark">{{ $home_content->frequently_qs3  }}</h4>
                                </button>
                                </h2>
                                <div 
                                id="faqThree"
                                class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingThree" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>{{ $home_content->frequently_ans3  }}</p>
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
                                    <h4 class="c-dark">{{ $home_content->frequently_qs4  }}</h4>
                                </button>
                                </h2>
                                <div 
                                id="faqFour"
                                class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingFour" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        <p>{{ $home_content->frequently_ans4  }}</p>
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

@endsection
