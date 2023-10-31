@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
   Guides
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
                        <div class="header-content">
                            <h1 class="c-dark">Design-related guides just for you!</h1>
                            <p class="paragraph-big">Awesome content help you take your business to the next level
                                with great design. Look out for new guides every month!</p>
                            <div class="button-group">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header - end -->
<!-- case studies -->
{{-- <section class="case-studies">
    <div class="container">
        <div class="case-studies-wrap">
            <div class="row justify-content-between">
                <div class="col-md-12">
                    <div class="case-studies-left">
                        <div class="header-content">
                            <h1 class="c-dark">Design-related guides just for you!</h1>
                            <p class="paragraph-big">Awesome content help you take your business to the next level
                                with great design. Look out for new guides every month!</p>
                            <div class="button-group">
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section> --}}
<section class="case-study-div">
    <div class="container">
        <div class="case-study-div">
            <div class="row">
                @foreach($guides as $guide)
                <div class="col-xl-4 col-md-6">
                    <div class="case-studies-img-div">
                        <div class="case-studies-img guide-img">
                            <a href=""><img src="{{ asset($guide->image) }}" alt=""></a>
                            <div class="case-studies-text">
                                
                                    <h3>{{ $guide->title }}
                                    </h3>
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <div class="col-lg-12 mt-4 wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="button-group button-group-center">
                        <a href="#" class="button button-red">
                            <span>View More</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection