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
                        <h1 class="m-horz-auto heading-width-res-full heading-width-83"><span class="c-red">Account Executive</span>(Remote)</h1>
                        <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci earum, dolorem distinctio .</p>
                        <div class="opening-box mb-5">
                            <div class="remote d-flex align-items-center justify-content-center">
                                <a href="">
                                    <h4><span><i class="fas fa-map-marker-alt"></i></span>Worldwide</h4>
                                </a>
                                <a href="">
                                    <h4><span><i class="fas fa-wifi"></i></span>Remote OK</h4>
                                </a>
                                <a href="">
                                    <h4><span><i class="fas fa-building"></i></span>Full-Time</h4>
                                </a>
                                <a href="">
                                    <h4><span><i class="fas fa-building"></i></span>Sales</h4>
                                </a>
                            </div>
                        </div>
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
<section class="job-openings">
    <div class="container">
        <div class="job-openings-wrap">
            <div class="job-openings-breadcrumb">
                <ul class="breadcrumb">
                    <li><a href="#">Job Openings</a></li>
                    <li><a href="#">Account Executive (Remote)</a></li>
                    <li>Apply</li>
                </ul>
            </div>
            <div class="job-form">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="apply-btn btn-blue">
                        <a href="" class="btn">Upload Resume*</a>
                    </div>
                    <div class="apply-btn btn-blue">
                        <a href="" class="btn">Upload Resume*</a>
                    </div>
                    <div class="apply-btn btn-blue">
                        <a href="" class="btn">Upload Resume*</a>
                    </div>
                </div>
                <form action="">
                    <h3>Personal Details</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Full Name<span>*</span></label>
                                <input type="text" class="form-control" id="" value="" placeholder="Full Name" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Email Address<span>*</span></label>
                                <input type="text" class="form-control" id="" value="" placeholder="Email Address" required="">
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
                                <textarea class="form-control form-control-1" id="" placeholder="" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Describe your experience in sales.<span>*</span></label>
                                <textarea class="form-control form-control-1" id="" placeholder="" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Which country are you currently based in?<span>*</span></label>
                                <input type="text" class="form-control" id="" value="" placeholder="" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Can you work (at least) partially on US EST Time?<span>*</span></label>
                                <input type="text" class="form-control" id="" value="" placeholder="" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">What is your expected salary (USD monthly)?<span>*</span></label>
                                <input type="text" class="form-control" id="" value="" placeholder="" required="">
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