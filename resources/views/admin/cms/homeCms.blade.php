@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Edit Home Cms
@endsection
@push('styles')
@endpush

@section('content')
    <div class="page-wrapper">

        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Details</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Edit Cms</li>
                        </ul>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        {{-- <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_group"><i
                            class="fa fa-plus"></i> Add Category</a> --}}
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-xl-12 mx-auto">
                                <div class="card border-0 border-4">
                                    <div class="card-body">
                                        <form action="{{ route('home.cms.update') }}" method="POST"
                                            enctype="multipart/form-data">

                                            @csrf
                                            <div class="border p-4 rounded">
                                                <label for="inputEnterYourName" class="col-form-label"><h3>Top Section:</h3></label> 
                                                <hr>   
                                                <input type="hidden" name="home_cms_id" value="{{ $homeCms->id }}">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Top Title
                                                            <span style="color: red;">*</span></label>
                                                        <input type="text" name="banner_title" class="form-control"  value="{{ $homeCms->banner_title }}"> 
                                                        @if ($errors->has('banner_title'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('banner_title') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Top Details <span
                                                                style="color: red;">*</span></label>
                                                        <textarea name="banner_description"  class="form-control">{{ $homeCms->banner_description }}</textarea>
                                                        @if ($errors->has('banner_description'))
                                                        <div class="error" style="color:red;">
                                                            {{ $errors->first('banner_description') }}</div>
                                                    @endif
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Top Background Image <span
                                                                style="color: red;">*</span></label>
                                                        <input type="file" name="banner_back_image" class="form-control" >
                                                        @if ($errors->has('banner_back_image'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('banner_back_image') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Image
                                                            Preview </label>
                                                        <br>
                                                        <img src="{{ asset($homeCms->banner_back_image) }}" alt="" width="400px" height="180px">
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Top Front Image <span
                                                                style="color: red;">*</span></label>
                                                        <input type="file" name="banner_image" class="form-control" id="editor" >
                                                        
                                                        @if ($errors->has('banner_image'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('banner_image') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Image
                                                            Preview </label>
                                                        <br>
                                                        <img src="{{ asset($homeCms->banner_image) }}" alt="" width="300px" height="230px">
                                                    </div>

                                                    <label for="inputEnterYourName" class="col-form-label"><h3>Section 1:</h3></label>   
                                                    <hr> 
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 1 Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section1_main_title" class="form-control"  value="{{ $homeCms->section1_main_title }}"> 
                                                            @if ($errors->has('section1_main_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section1_main_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">1st Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section1_1st_title" class="form-control"  value="{{ $homeCms->section1_1st_title }}"> 
                                                            @if ($errors->has('section1_1st_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section1_1st_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">1st Short Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section1_1st_details" class="form-control" >{{ $homeCms->section1_1st_details }}</textarea> 
                                                            @if ($errors->has('section1_1st_details'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section1_1st_details') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">2nd Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section1_2nd_title" class="form-control"  value="{{ $homeCms->section1_2nd_title }}"> 
                                                            @if ($errors->has('section1_2nd_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section1_2nd_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">2nd Short Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section1_2nd_details" class="form-control" > {{ $homeCms->section1_2nd_details }}</textarea>
                                                            @if ($errors->has('section1_2nd_details'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section1_2nd_details') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">3rd Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section1_3rd_title" class="form-control"  value="{{ $homeCms->section1_3rd_title }}"> 
                                                            @if ($errors->has('section1_3rd_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section1_3rd_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">3rd Short Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section1_3rd_details" class="form-control" > {{ $homeCms->section1_3rd_details }}</textarea>
                                                            @if ($errors->has('section1_3rd_details'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section1_3rd_details') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>  

                                                    
                                                    <label for="inputEnterYourName" class="col-form-label"><h3>Section 2:</h3></label>   
                                                    <hr>  
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 2 Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section2_main_title" class="form-control"  value="{{ $homeCms->section2_main_title }}"> 
                                                            @if ($errors->has('section2_main_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section2_main_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 2 Short Description
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section2_main_description" class="form-control" >{{ $homeCms->section2_main_description }}</textarea>
                                                            @if ($errors->has('section2_main_description'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section2_main_description') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label"> Section 2 Image <span
                                                                    style="color: red;">*</span></label>
                                                            <input type="file" name="section2_image" class="form-control">
                                                            
                                                            @if ($errors->has('section2_image'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section2_image') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Image
                                                                Preview </label>
                                                            <br>
                                                            <img src="{{ asset($homeCms->section2_image) }}" alt="" width="400px" height="230px">
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">1st Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section2_1st_title" class="form-control"  value="{{ $homeCms->section2_1st_title }}"> 
                                                            @if ($errors->has('section2_1st_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section2_1st_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">1st Short Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section2_main_description" class="form-control" >{{ $homeCms->section2_main_description }}</textarea> 
                                                            @if ($errors->has('section2_main_description'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section2_main_description') }}</div>
                                                            @endif
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">2nd Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section2_2nd_title" class="form-control"  value="{{ $homeCms->section2_2nd_title }}"> 
                                                            @if ($errors->has('section2_2nd_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section2_2nd_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">2nd Short Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section2_2nd_details" class="form-control" >{{ $homeCms->section2_2nd_details }}</textarea> 
                                                            @if ($errors->has('section2_2nd_details'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section2_2nd_details') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">3rd Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section2_3rd_title" class="form-control"  value="{{ $homeCms->section2_3rd_title }}"> 
                                                            @if ($errors->has('section2_3rd_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section2_3rd_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">3rd Short Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section2_3rd_details" class="form-control" >{{ $homeCms->section2_3rd_details }}</textarea> 
                                                            @if ($errors->has('section2_3rd_details'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section2_3rd_details') }}</div>
                                                            @endif
                                                        </div>
                                                     
                                                    </div> 

                                                    <label for="inputEnterYourName" class="col-form-label"><h3>Section 3:</h3></label>   
                                                    <hr> 
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 3 Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section3_main_title" class="form-control"  value="{{ $homeCms->section3_main_title }}"> 
                                                            @if ($errors->has('section3_main_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section3_main_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 3 Title
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section3_main_description" class="form-control" >{{ $homeCms->section3_main_description }}</textarea> 
                                                            @if ($errors->has('section3_main_description'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section3_main_description') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label"> Section 3 Image <span
                                                                    style="color: red;">*</span></label>
                                                            <input type="file" name="section3_image" class="form-control">
                                                            
                                                            @if ($errors->has('section3_image'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section3_image') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Image
                                                                Preview </label>
                                                            <br>
                                                            <img src="{{ asset($homeCms->section3_image) }}" alt="" width="400px" height="230px">
                                                        </div>


                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">1st Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section3_1st_title" class="form-control"  value="{{ $homeCms->section3_1st_title }}"> 
                                                            @if ($errors->has('section3_1st_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section3_1st_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">1st Short Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section3_1st_description" class="form-control" >{{ $homeCms->section3_1st_description }}</textarea> 
                                                            @if ($errors->has('section3_1st_description'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section3_1st_description') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">2nd Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section3_2nd_title" class="form-control"  value="{{ $homeCms->section3_2nd_title }}"> 
                                                            @if ($errors->has('section3_2nd_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section3_2nd_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">2nd Short Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section3_2nd_description" class="form-control" >{{ $homeCms->section3_2nd_description }}</textarea> 
                                                            @if ($errors->has('section3_2nd_description'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section3_2nd_description') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">3rd Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section3_3rd_title" class="form-control"  value="{{ $homeCms->section3_3rd_title }}"> 
                                                            @if ($errors->has('section3_3rd_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section3_3rd_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">3rd Short Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section3_3rd_description" class="form-control" >{{ $homeCms->section3_3rd_description }}</textarea> 
                                                            @if ($errors->has('section3_3rd_description'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section3_3rd_description') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">4th Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section3_4th_title" class="form-control"  value="{{ $homeCms->section3_4th_title }}"> 
                                                            @if ($errors->has('section3_4th_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section3_4th_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">4th Short Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section3_4th_description" class="form-control" >{{ $homeCms->section3_4th_description }}</textarea> 
                                                            @if ($errors->has('section3_4th_description'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section3_4th_description') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">5th Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section3_5th_title" class="form-control"  value="{{ $homeCms->section3_5th_title }}"> 
                                                            @if ($errors->has('section3_5th_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section3_5th_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">5th Short Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section3_5th_description" class="form-control" >{{ $homeCms->section3_5th_description }}</textarea> 
                                                            @if ($errors->has('section3_5th_description'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section3_5th_description') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <label for="inputEnterYourName" class="col-form-label"><h3>Section 4:</h3></label>   
                                                    <hr> 
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 4 Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section4_main_title" class="form-control"  value="{{ $homeCms->section4_main_title }}"> 
                                                            @if ($errors->has('section4_main_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section4_main_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 4 Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section4_main_description" class="form-control" id="editor1"></textarea> 
                                                            @if ($errors->has('section4_main_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section4_main_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 4 Video link
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section4_video_link" class="form-control"  value="{{ $homeCms->section4_video_link }}"> 
                                                            @if ($errors->has('section4_video_link'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section4_video_link') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 4 Image1
                                                                <span style="color: red;">*</span></label>
                                                            <input type="file" name="section4_image1" class="form-control" > 
                                                            <img src="{{ asset($homeCms->section4_image1) }}" alt="" width="200px" height="150px">
                                                            @if ($errors->has('section4_image1'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section4_image1') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 4 Image2
                                                                <span style="color: red;">*</span></label>
                                                            <input type="file" name="section4_image2" class="form-control" > 
                                                            <img src="{{ asset($homeCms->section4_image2) }}" alt="" width="200px" height="150px">
                                                            @if ($errors->has('section4_image2'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section4_image2') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 4 Image3
                                                                <span style="color: red;">*</span></label>
                                                            <input type="file" name="section4_image3" class="form-control" > 
                                                            <img src="{{ asset($homeCms->section4_image3) }}" alt="" width="200px" height="150px">
                                                            @if ($errors->has('section4_image3'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section4_image3') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 4 Image4
                                                                <span style="color: red;">*</span></label>
                                                            <input type="file" name="section4_image4" class="form-control" > 
                                                            <img src="{{ asset($homeCms->section4_image4) }}" alt="" width="200px" height="150px">
                                                            @if ($errors->has('section4_image4'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section4_image4') }}</div>
                                                            @endif
                                                        </div>
                                                    </div> 
                                                    
                                                    <label for="inputEnterYourName" class="col-form-label"><h3>Section 5:</h3></label>   
                                                    <hr> 
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 5 Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section5_title" class="form-control"  value="{{ $homeCms->section5_title }}"> 
                                                            @if ($errors->has('section5_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section5_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">1st Content
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section5_1st_content" class="form-control"  value="{{ $homeCms->section5_1st_content }}"> 
                                                            @if ($errors->has('section5_1st_content'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section5_1st_content') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">1st Content Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section5_1st_content_details" class="form-control" >{{ $homeCms->section5_1st_content_details }}</textarea> 
                                                            @if ($errors->has('section5_1st_content_details'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section5_1st_content_details') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">2nd Content
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section5_2nd_content" class="form-control"  value="{{ $homeCms->section5_2nd_content }}"> 
                                                            @if ($errors->has('section5_2nd_content'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section5_2nd_content') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">2nd Content Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section5_2nd_content_details" class="form-control" >{{ $homeCms->section5_2nd_content_details }}</textarea> 
                                                            @if ($errors->has('section5_2nd_content_details'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section5_2nd_content_details') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">3rd Content
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section5_3rd_content" class="form-control"  value="{{ $homeCms->section5_3rd_content }}"> 
                                                            @if ($errors->has('section5_3rd_content'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section5_3rd_content') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">3rd Content Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section5_3rd_content_details" class="form-control" >{{ $homeCms->section5_3rd_content_details }}</textarea> 
                                                            @if ($errors->has('section5_3rd_content_details'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section5_3rd_content_details') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">4th Content
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section5_4th_content" class="form-control"  value="{{ $homeCms->section5_4th_content }}"> 
                                                            @if ($errors->has('section5_4th_content'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section5_4th_content') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">4th Content Details
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="section5_4th_content_details" class="form-control" >{{ $homeCms->section5_4th_content_details }}</textarea> 
                                                            @if ($errors->has('section5_4th_content_details'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section5_4th_content_details') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>  
                                                    
                                                    <label for="inputEnterYourName" class="col-form-label"><h3>Faq Section:</h3></label>   
                                                    <hr> 
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="inputEnterYourName" class="col-form-label">Faq Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="faq_section_title" class="form-control"  value="{{ $homeCms->faq_section_title }}"> 
                                                            @if ($errors->has('faq_section_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('faq_section_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Question 1
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="faq_1st_question" class="form-control"  value="{{ $homeCms->faq_1st_question }}"> 
                                                            @if ($errors->has('faq_1st_question'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('faq_1st_question') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Answer 1
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="faq_1st_answer" class="form-control" >{{ $homeCms->faq_1st_answer }}</textarea> 
                                                            @if ($errors->has('faq_1st_answer'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('faq_1st_answer') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Question 2
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="faq_2nd_question" class="form-control"  value="{{ $homeCms->faq_2nd_question }}"> 
                                                            @if ($errors->has('faq_2nd_question'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('faq_2nd_question') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Answer 2
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="faq_2nd_answer" class="form-control" >{{ $homeCms->faq_2nd_answer }}</textarea> 
                                                            @if ($errors->has('faq_2nd_answer'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('faq_2nd_answer') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Question 3
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="faq_3rd_question" class="form-control"  value="{{ $homeCms->faq_3rd_question }}"> 
                                                            @if ($errors->has('faq_3rd_question'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('faq_3rd_question') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Answer 3
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="faq_3rd_answer" class="form-control" >{{ $homeCms->faq_3rd_answer }}</textarea> 
                                                            @if ($errors->has('faq_3rd_answer'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('faq_3rd_answer') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Question 4
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="faq_4th_question" class="form-control"  value="{{ $homeCms->faq_4th_question }}"> 
                                                            @if ($errors->has('faq_4th_question'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('faq_4th_question') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Answer 4
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="faq_4th_answer" class="form-control" >{{ $homeCms->faq_4th_answer }}</textarea> 
                                                            @if ($errors->has('faq_4th_answer'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('faq_4th_answer') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>  
                                                    
                                                    <label for="inputEnterYourName" class="col-form-label"><h3>Section 6:</h3></label>   
                                                    <hr> 
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 6 Title
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="section6_title" class="form-control"  value="{{ $homeCms->section6_title }}"> 
                                                            @if ($errors->has('section6_title'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section6_title') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Section 6 Image
                                                                <span style="color: red;">*</span></label>
                                                                <input type="file" name="section6_image" class="form-control" >
                                                                <img src="{{ asset($homeCms->section6_image) }}" alt="" width="200px" height="150px">
                                                            @if ($errors->has('section6_image'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('section6_image') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Image preview
                                                               </label>
                                                        </div>
                                                    </div>    


                                                    <div class="row" style="margin-top: 20px; float: left;">
                                                        <div class="col-sm-9">
                                                            <button type="submit"
                                                                class="btn px-5 submit-btn">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
    CKEDITOR.on('instanceReady', function(evt) {
        var editor = evt.editor;

        editor.on('change', function(e) {
            var contentSpace = editor.ui.space('contents');
            var ckeditorFrameCollection = contentSpace.$.getElementsByTagName('iframe');
            var ckeditorFrame = ckeditorFrameCollection[0];
            var innerDoc = ckeditorFrame.contentDocument;
            var innerDocTextAreaHeight = $(innerDoc.body).height();
            console.log(innerDocTextAreaHeight);
        });
    });
</script>

@endpush
