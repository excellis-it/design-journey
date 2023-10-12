@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
   Case Studies
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
                        <h1 class="m-horz-auto heading-width-res-full heading-width-83">Case Studies</h1>
                        <p class="paragraph-big">Discover how our designs help businesses in different industries
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header - end -->
<!-- case studies -->
<section class="case-studies">
    <div class="container">
        <div class="case-studies-wrap">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="case-studies-left">
                        <div class="header-content">
                            <h1 class="c-dark">Creating a Professional Brand Image for a Business Consultancy</h1>
                            <p class="paragraph-big">The complete branding project for a professional executive
                                coaching service run by Itamar Marani.</p>
                            <div class="button-group">
                                <a href="#" class="button button-red">
                                    <span>READ STORY</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="case-studies-right">
                        <div class="case-studies-img">
                            <img src="{{ asset('frontend_assets/assets/images/case-1.jpeg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="case-study-div">
    <div class="container">
        <div class="case-study-div">
            <div class="row">
                <div class="col-md-6">
                    <div class="case-studies-img-div">
                        <div class="case-studies-img">
                           <a href=""><img src="{{ asset('frontend_assets/assets/images/case-2.jpeg')}}" alt=""></a>
                            <div class="case-studies-text">
                              <a href="">  <h3>Codelation Case Study: Providing Graphic Design Support for a Software Company
                            </h3></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="case-studies-img-div">
                        <div class="case-studies-img">
                           <a href=""> <img src="{{ asset('frontend_assets/assets/images/case-3.jpeg')}}" alt=""></a>
                            <div class="case-studies-text">
                               <a href=""> <h3>WP Buffs Achieves 400% MRR Growth with a Better Website</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="case-studies-img-div">
                        <div class="case-studies-img">
                            <a href=""><img src="{{ asset('frontend_assets/assets/images/case-4.jpeg')}}" alt=""></a>
                            <div class="case-studies-text">
                              <a href="">  <h3>Remote Job Board Attracted More Visitors and Signups with a Redesigned Website
                            </h3></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="case-studies-img-div">
                        <div class="case-studies-img">
                            <a href=""><img src="{{ asset('frontend_assets/assets/images/case-5.jpeg')}}" alt=""></a>
                            <div class="case-studies-text">
                             <a href="">   <h3>Time Is Money: Solving a Tech Startup's Design Problem</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="case-studies-img-div">
                        <div class="case-studies-img">
                           <a href=""> <img src="{{ asset('frontend_assets/assets/images/case-1.jpeg')}}" alt=""></a>
                            <div class="case-studies-text">
                                <a href="">
                                    <h3>Codelation Case Study: Providing Graphic Design Support for a Software Company
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="case-studies-img-div">
                        <div class="case-studies-img">
                           <a href=""> <img src="{{ asset('frontend_assets/assets/images/case-2.jpeg')}}" alt=""></a>
                            <div class="case-studies-text">
                               <a href="">
                                <h3>Codelation Case Study: Providing Graphic Design Support for a Software Company
                                </h3>
                               </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="case-studies-img-div">
                        <div class="case-studies-img">
                           <a href=""> <img src="{{ asset('frontend_assets/assets/images/case-3.jpeg')}}" alt=""></a>
                            <div class="case-studies-text">
                                <a href="">
                                    <h3>Codelation Case Study: Providing Graphic Design Support for a Software Company
                                    </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="case-studies-img-div">
                        <div class="case-studies-img">
                          <a href="">  <img src="{{ asset('frontend_assets/assets/images/case-4.jpeg')}}" alt=""></a>
                            <div class="case-studies-text">
                               <a href="">
                                <h3>Codelation Case Study: Providing Graphic Design Support for a Software Company
                                </h3>
                               </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection