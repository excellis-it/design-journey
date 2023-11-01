@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Perks
@endsection
@push('styles')
@endpush

@section('content')

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