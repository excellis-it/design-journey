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
                            
                            <!-- accordion item - end -->
                            <!-- accordion item - start -->
                            @foreach ($faqs as $key => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqHeading{{ $key }}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $key }}" aria-expanded="true" aria-controls="faq{{ $key }}">
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
