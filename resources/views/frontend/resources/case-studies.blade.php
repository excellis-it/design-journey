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

@if($case_studies->count() > 0)
<section class="case-studies">
    <div class="container">
        <div class="case-studies-wrap">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <div class="case-studies-left">
                        <div class="header-content">
                            <h1 class="c-dark">{{ $case_studies[0]['title'] ?? '' }}</h1>
                            <p class="paragraph-big">{{ $case_studies[0]['description'] ?? '' }}</p>
                            <!--<div class="button-group">-->
                            <!--    <a href="#" class="button button-red">-->
                            <!--        <span>READ STORY</span>-->
                            <!--    </a>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="case-studies-right">
                        <div class="case-studies-img">
                            <img src="{{Storage::url($case_studies[0]['main_image'] ?? '')}}" alt="">
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
               @foreach($case_studies as $index => $case_study)
                @if($index === 0)
                    @continue
                @endif
            
                <div class="col-md-6">
                    <div class="case-studies-img-div">
                        <div class="case-studies-img">
                            <a href=""><img src="{{Storage::url($case_study->main_image)}}" alt=""></a>
                            <div class="case-studies-text">
                                <a href=""><h3>{{$case_study->title}}</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            

            </div>
        </div>
    </div>
</section>
@else 
<section class="case-studies">
    <div class="container">
        <div class="case-studies-wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="case-studies-left">
                        <div class="header-content">
                            <h3>No Case Studies Found..</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif


@endsection