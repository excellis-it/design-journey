@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
Career Details
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
                        <h1 class="m-horz-auto heading-width-res-full heading-width-83"><span class="c-red">{{ $career_details->career_name }}</span></h1>
                        <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">{!! $career_details->details !!}</p>
                        <div class="opening-box mb-5">
                            <div class="remote d-flex align-items-center justify-content-center">
                                <a href="">
                                    <h4><span><i class="fas fa-map-marker-alt"></i></span>{{ $career_details->location }}</h4>
                                </a>
                                <a href="">
                                    <h4><span><i class="fas fa-wifi"></i></span>{{ $career_details->work_type }}</h4>
                                </a>
                                <a href="">
                                    <h4><span><i class="fas fa-building"></i></span>{{ $career_details->job_type }}</h4>
                                </a>
                                
                            </div>
                        </div>
                        {{-- <div class="col-lg-12 wow">
                            <div class="button-group button-group-center">
                                <a href="#" class="button button-red">
                                    <span>View Openings</span>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header - end -->
<section class="job-openings">
    <div class="container">
        <div class="job-openings-wrap">
            <div class="job-openings-breadcrumb">
                <ul class="breadcrumb">
                    <li><a href="#">Job Openings</a></li>
                    <li><a href="#">{{ $career_details->career_name }}</a></li>
                </ul>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="abt-job-wrap">
                        <div class="abt-job">
                            
                            <p>{!! $career_details->details !!}</p>
                            <h3>Location</h3>
                            <ul>
                                <li>{{ $career_details->location }}</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="apply-btn">
                        <a href="{{ route('career-form',$career_details->id) }}" class="btn">Apply To Position</a>
                    </div>
                    {{-- <div class="apply-btn btn-blue">
                        <a href="{{ route('career-form') }}" class="btn">Use My Indeed Resume</a>
                    </div>
                    <div class="apply-btn btn-blue">
                        <a href="{{ route('career-form') }}" class="btn">Apply Using LinkedIn</a>
                    </div> --}}
                </div>
            </div>
        </div>
</section>



@endsection