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
        <div class="container container-help">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="header-content t-center">
                        <h1 class="m-horz-auto heading-width-res-full heading-width-83"><span class="c-red">Come Work</span> With Us</h1>
                        <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">We're looking for great people to join our growing team.</p>
                        <div class="col-lg-12 wow">
                            <div class="button-group button-group-center">
                                <a href="#" class="button button-red">
                                    <span>View Openings</span>
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
<section class="career-sec">
    <div class="container">
        <div class="career-sec-wrap">
            <h2 class="c-dark lt-60 text-center">Our Openings</h2>
            @foreach($careers as $career)
            <div class="opening-box-div d-flex justify-content-between align-items-center">
                <div class="opening-box">
                    <h3>{{ $career->career_name }} </h3>
                    <div class="remote d-flex align-items-center">
                        <a href="">
                            <h4><span><i class="fas fa-wifi"></i></span>{{ $career->work_type }} {{ $career->location }}</h4>
                        </a>
                        <a href="">
                            <h4><span><i class="fas fa-building"></i></span>{{ $career->job_type }}</h4>
                        </a>
                        
                    </div>
                </div>
                <div class="app-btn">
                   <a href="{{route('career.details',$career->id)}}" class="btn">Apply</a>    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection