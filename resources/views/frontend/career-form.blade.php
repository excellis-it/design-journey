@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Career Form
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
                            <h1 class="m-horz-auto heading-width-res-full heading-width-83"><span
                                    class="c-red">{{ $career_details->career_name }}</span></h1>
                            <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">
                                {!! $career_details->details !!}</p>
                            <div class="opening-box mb-5">
                                <div class="remote d-flex align-items-center justify-content-center">
                                    <a href="">
                                        <h4><span><i
                                                    class="fas fa-map-marker-alt"></i></span>{{ $career_details->location }}
                                        </h4>
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
                        <li>Apply</li>
                    </ul>
                </div>
                <div class="job-form">
                    <form action="{{ route('submit.job-apply') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="career_id" value="{{ $career_details->id }}">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="form-group">
                                <label>
                                    <div class="up-file">
                                        <input type="file" name="resume_upload" hidden />
                                        <div class="btn-up-file"><span class="up-file-icon"><i
                                                    class="ph ph-file-plus"></i></span></div>
                                        <div class="btn-up"> Upload Resume*
                                        </div>
                                </label>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                        <div class="apply-btn btn-blue">
                            <input type="file" name="demo_design_file" hidden />
                            <div class="btn-up">
                                <span class="up-icon"><i class="ph ph-arrow-fat-line-up"></i></span> Upload
                            </div>
                            <input type="file"> <a href="" class="btn">Upload Resume*</a>
                           
                        </div>
                    </div> --}}
                        {{-- <div class="apply-btn btn-blue">
                        <a href="" class="btn">Upload Resume*</a>
                    </div>
                    <div class="apply-btn btn-blue">
                        <a href="" class="btn">Upload Resume*</a>
                    </div> --}}
                </div>

                <h3>Personal Details</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Full Name<span>*</span></label>
                            <input type="text" name="name" class="form-control" id="" value="{{ old('name') }}"
                                placeholder="Full Name">
                            @if ($errors->has('name'))
                                <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Email Address<span>*</span></label>
                            <input type="text" name="email" class="form-control" id="" value="{{ old('email') }}"
                                placeholder="Email Address">
                                @if ($errors->has('email'))
                                <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                    </div>
                    <!-- <div class="form-group col-12">
                                    <textarea class="form-control form-control-1" id="" placeholder="Message" rows="3"></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <div class="bnr-btn-1 text-center">
                                        <a href="#" class="main-btn btn-bnr">submit</a>
                                    </div>
                                </div> -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Introduce yourself in 2-3 sentences.<span>*</span></label>
                            <textarea class="form-control form-control-1" name="introduction" id="" placeholder="" rows="6"></textarea>
                            @if ($errors->has('introduction'))
                                <div class="error" style="color:red;">{{ $errors->first('introduction') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Describe your experience in sales.<span>*</span></label>
                            <textarea class="form-control form-control-1"  name="experience" id="" placeholder="" rows="6"></textarea>
                            @if ($errors->has('experience'))
                                <div class="error" style="color:red;">{{ $errors->first('experience') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Which country are you currently based in?<span>*</span></label>
                            <input type="text" class="form-control" id=""  name="country"  value="{{ old('country') }}" placeholder="">
                            @if ($errors->has('country'))
                                <div class="error" style="color:red;">{{ $errors->first('country') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Can you work (at least) partially on US EST Time?<span>*</span></label>
                            <input type="text" class="form-control" id=""  name="us_time_available"  value="{{ old('us_time_available') }}" placeholder="">
                            @if ($errors->has('us_time_available'))
                                <div class="error" style="color:red;">{{ $errors->first('us_time_available') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">What is your expected salary (USD monthly)?<span>*</span></label>
                            <input type="text" class="form-control" name="salary" id="" value="{{ old('salary') }}" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <button class="frm-sub" type="submit">Submit Application</button>
                        </div>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </section>
@endsection
