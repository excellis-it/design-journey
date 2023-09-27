
@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Our work
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
                            <h1 class="m-horz-auto heading-width-res-full heading-width-83">Pricing</h1>
                            <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">All-inclusive
                                plans. No contract. Cancel anytime.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header - end -->

    <!-- feature section - start -->
    <div class="feature-section" id="about">
        <div class="feature-section-wrapper pt-0">
            <div class="container">
                <div class="Pricing_sec">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="monthly-tab" data-bs-toggle="tab" data-bs-target="#monthly"
                                type="button" role="tab" aria-controls="monthly" aria-selected="true">MONTHLY
                                </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="quarterly-tab" data-bs-toggle="tab" data-bs-target="#quarterly"
                                type="button" role="tab" aria-controls="quarterly" aria-selected="false">QUARTERLY</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="yearly-tab" data-bs-toggle="tab" data-bs-target="#yearly"
                                type="button" role="tab" aria-controls="yearly" aria-selected="false">YEARLY</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                            <!-- pricing row - start -->
                            <div class="row">
                                <!-- single pricing - start -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-single">
                                        <div class="pricing-single-wrapper">
                                            <h3 class="plan c-red">Advanced</h3>
                                            <h5>Create all of your everyday designs.</h5>
                                            <p class="price c-grey">$549<sup>/mo</sup></p>
                                            <a href="#" class="button button-red button-full-width">
                                                <span>GET STARTED</span>
                                            </a>
                                            <ul>
                                                <li class="available">1 Daily Output</li>
                                                <li class="available">1-2 Days Delivery</li>
                                                <li class="available">All Design Services</li>
                                            </ul>
                                            <div class="box bg-red"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single pricing - end -->
                                <!-- single pricing - start -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-single">
                                        <div class="pricing-single-wrapper">
                                            <h3 class="plan c-purple">Business</h3>
                                            <h5>Get double the output everyday.</h5>
                                            <p class="price c-grey">$899<sup>/mo</sup></p>
                                            <a href="#" class="button button-purple button-full-width">
                                                <span>GET STARTED</span>
                                            </a>
                                            <ul>
                                                <li class="available">2 Daily Output</li>
                                                <li class="available">1-2 Days Delivery</li>
                                                <li class="available">All Design Services</li>
                                                <li class="available">Motion Graphics Services</li>
                                            </ul>
                                            <div class="box bg-purple"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single pricing - end -->
                                <!-- single pricing - start -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="pricing-single">
                                        <div class="pricing-single-wrapper">
                                            <h3 class="plan c-blue">Designated Designer</h3>
                                            <h5>Collaborate in real time with your designer.</h5>
                                            <p class="price c-grey">$1,199<sup>/mo</sup></p>
                                            <a href="#" class="button button-blue button-full-width">
                                                <span>BOOK A CALL</span>
                                            </a>
                                            <ul>
                                                <li class="available">Designated Designer</li>
                                                <li class="available">Same Day Delivery</li>
                                                <li class="available">Real Time Slack Communication</li>
                                                <li class="available">All Design Services</li>
                                                <li class="available">Motion Graphics Services</li>
                                            </ul>
                                            <h6 class="c-grey">Available for US Eastern, Central European & Indochina Time</h6>
                                            <div class="box bg-blue"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single pricing - end -->  
                            </div>
                            <!-- pricing row - end -->
                        </div>
                        <div class="tab-pane fade" id="quarterly" role="tabpanel" aria-labelledby="quarterly-tab">...</div>
                        <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature section - end -->
    @include('frontend.includes.get-in-touch')
    @endsection

    @push('scripts')
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js" id=""></script>
    
    <script>
        $('.filters ul li').click(function () {
            $('.filters ul li').removeClass('active');
            $(this).addClass('active');

            var data = $(this).attr('data-filter');
            $grid.isotope({
                filter: data
            })
        });

        var $grid = $(".grid").isotope({
            itemSelector: ".all",
            percentPosition: true,
            masonry: {
                columnWidth: ".all"
            }
        });
    </script>
@endpush