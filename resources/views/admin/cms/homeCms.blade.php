@extends('admin.layouts.master')
@section('title')
    Home Cms Edit - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Edit Home Cms</h4>
            <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
        </div>
        <div class="">
            <ul class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    Home
                </li>
                <li class=""> >> Home Cms</li>
            </ul>
        </div>
    </section>

    <div class="main-content">
        <div class="inner_page">
            <div class="card-title">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="mb-0">Edit</h4>
                    </div>
                </div>
            </div>
            <div class="card search_bar sales-report-card">
                <div class="sales-report-card-wrap">
                    <div class="form-head">
                        <h4>Home Cms Information</h4>
                    </div>
                    <form action="{{ route('home.cms.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <input type="hidden" name="home_cms_id" value="{{ $homeCms->id }}">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Top Title*</label>
                                        <input type="text" name="banner_title" class="form-control"
                                            id="floatingInputValue" placeholder="Enter banner title*"
                                            value="{{ $homeCms->banner_title }}">
                                        @if ($errors->has('banner_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('banner_title') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Top Details *</label>
                                        <textarea name="banner_description" class="form-control" id="floatingInputValue">{{ $homeCms->banner_description }}</textarea>
                                        @if ($errors->has('banner_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('banner_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Top Background Image*</label>
                                        <input type="file" name="banner_back_image" class="form-control">
                                        @if ($errors->has('banner_back_image'))
                                            <div class="error" style="color:red;">{{ $errors->first('banner_back_image') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Preview</label>
                                        <br>
                                        <img src="{{ asset($homeCms->banner_back_image) }}" alt="" width="400px"
                                            height="180px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Top Front Image*</label>
                                        <input type="file" name="banner_image" class="form-control">
                                        @if ($errors->has('banner_image'))
                                            <div class="error" style="color:red;">{{ $errors->first('banner_image') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Preview</label>
                                        <br>
                                        <img src="{{ asset($homeCms->banner_image) }}" alt="" width="400px"
                                            height="180px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label">
                            <h3>Section 1:</h3>
                        </label>
                        <hr>

                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Section 1 Main Title*</label>
                                        <input type="text" name="section1_main_title" class="form-control"
                                            id="floatingInputValue" placeholder="Enter section1 main title*"
                                            value="{{ $homeCms->section1_main_title }}">
                                        @if ($errors->has('section1_main_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section1_main_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">1st Title*</label>
                                        <input type="text" name="section1_1st_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section1_1st_title }}">
                                        @if ($errors->has('section1_1st_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section1_1st_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">1st Short Details*</label>
                                        <textarea name="section1_1st_details" class="form-control" id="floatingInputValue">{{ $homeCms->section1_1st_details }}</textarea>
                                        @if ($errors->has('section1_1st_details'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section1_1st_details') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">2nd Title*</label>
                                        <input type="text" name="section1_2nd_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section1_2nd_title }}">
                                        @if ($errors->has('section1_2nd_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section1_2nd_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">2nd Short Details*</label>
                                        <textarea name="section1_2nd_details" class="form-control" id="floatingInputValue">{{ $homeCms->section1_2nd_details }}</textarea>
                                        @if ($errors->has('section1_2nd_details'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section1_2nd_details') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">3rd Title*</label>
                                        <input type="text" name="section1_3rd_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section1_3rd_title }}">
                                        @if ($errors->has('section1_3rd_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section1_3rd_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">3rd Short Details*</label>
                                        <textarea name="section1_3rd_details" class="form-control" id="floatingInputValue">{{ $homeCms->section1_3rd_details }}</textarea>
                                        @if ($errors->has('section1_3rd_details'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section1_3rd_details') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label">
                            <h3>Section 2:</h3>
                        </label>
                        <hr>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 2 Title*</label>
                                        <input type="text" name="section2_main_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section2_main_title }}">
                                        @if ($errors->has('section2_main_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section2_main_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 2 Short Description*</label>
                                        <textarea name="section2_main_description" class="form-control" id="floatingInputValue">{{ $homeCms->section2_main_description }}</textarea>
                                        @if ($errors->has('section2_main_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section2_main_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 2 Image*</label>
                                        <input type="file" name="section2_image" class="form-control">
                                        @if ($errors->has('section2_image'))
                                            <div class="error" style="color:red;">{{ $errors->first('section2_image') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Preview</label>
                                        <br>
                                        <img src="{{ asset($homeCms->section2_image) }}" alt="" width="400px"
                                            height="180px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">1st Title*</label>
                                        <input type="text" name="section2_1st_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section2_1st_title }}">
                                        @if ($errors->has('section2_1st_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section2_1st_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">1st Short Details*</label>
                                        <textarea name="section2_1st_details" class="form-control" id="floatingInputValue">{{ $homeCms->section2_1st_details }}</textarea>
                                        @if ($errors->has('section2_1st_details'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section2_1st_details') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">2nd Title*</label>
                                        <input type="text" name="section2_2nd_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section2_2nd_title }}">
                                        @if ($errors->has('section2_2nd_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section2_2nd_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">2nd Short Details*</label>
                                        <textarea name="section2_2nd_details" class="form-control" id="floatingInputValue">{{ $homeCms->section2_2nd_details }}</textarea>
                                        @if ($errors->has('section2_2nd_details'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section2_2nd_details') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">3rd Title*</label>
                                        <input type="text" name="section2_3rd_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section2_3rd_title }}">
                                        @if ($errors->has('section2_3rd_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section2_3rd_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">3rd Short Details*</label>
                                        <textarea name="section2_3rd_details" class="form-control" id="floatingInputValue">{{ $homeCms->section2_3rd_details }}</textarea>
                                        @if ($errors->has('section2_3rd_details'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section2_3rd_details') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label">
                            <h3>Section 3:</h3>
                        </label>
                        <hr>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 3 Title*</label>
                                        <input type="text" name="section3_main_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section3_main_title }}">
                                        @if ($errors->has('section3_main_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_main_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 3 Decription*</label>
                                        <textarea name="section3_main_description" class="form-control" id="floatingInputValue">{{ $homeCms->section3_main_description }}</textarea>
                                        @if ($errors->has('section3_main_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_main_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 3 Image*</label>
                                        <input type="file" name="section3_image" class="form-control">
                                        @if ($errors->has('section3_image'))
                                            <div class="error" style="color:red;">{{ $errors->first('section3_image') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Preview</label>
                                        <br>
                                        <img src="{{ asset($homeCms->section3_image) }}" alt="" width="400px"
                                            height="180px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">1st Title*</label>
                                        <input type="text" name="section3_1st_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section3_1st_title }}">
                                        @if ($errors->has('section3_1st_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_1st_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">1st Short Details*</label>
                                        <textarea name="section3_1st_description" class="form-control" id="floatingInputValue">{{ $homeCms->section3_1st_description }}</textarea>
                                        @if ($errors->has('section3_1st_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_1st_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">2nd Title*</label>
                                        <input type="text" name="section3_2nd_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section3_2nd_title }}">
                                        @if ($errors->has('section3_2nd_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_2nd_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">2nd Short Details*</label>
                                        <textarea name="section3_2nd_description" class="form-control" id="floatingInputValue">{{ $homeCms->section3_2nd_description }}</textarea>
                                        @if ($errors->has('section3_2nd_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_2nd_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">3rd Title*</label>
                                        <input type="text" name="section3_3rd_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section3_3rd_title }}">
                                        @if ($errors->has('section3_3rd_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_3rd_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">3rd Short Details*</label>
                                        <textarea name="section3_3rd_description" class="form-control" id="floatingInputValue">{{ $homeCms->section3_3rd_description }}</textarea>
                                        @if ($errors->has('section3_3rd_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_3rd_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">4th Title*</label>
                                        <input type="text" name="section3_4th_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section3_4th_title }}">
                                        @if ($errors->has('section3_4th_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_4th_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">4th Short Details*</label>
                                        <textarea name="section3_4th_description" class="form-control" id="floatingInputValue">{{ $homeCms->section3_4th_description }}</textarea>
                                        @if ($errors->has('section3_4th_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_4th_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">5th Title*</label>
                                        <input type="text" name="section3_5th_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section3_5th_title }}">
                                        @if ($errors->has('section3_5th_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_5th_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">5th Short Details*</label>
                                        <textarea name="section3_5th_description" class="form-control" id="floatingInputValue">{{ $homeCms->section3_5th_description }}</textarea>
                                        @if ($errors->has('section3_5th_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_5th_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label">
                            <h3>Section 4:</h3>
                        </label>
                        <hr>
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 4 Title*</label>
                                        <input type="text" name="section4_main_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section4_main_title }}">
                                        @if ($errors->has('section4_main_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section4_main_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 4 Details*</label>
                                        <textarea name="section4_main_description" class="form-control" id="floatingInputValue">{{ $homeCms->section4_main_description }}</textarea>
                                        @if ($errors->has('section4_main_description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section4_main_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 4 Video link*</label>
                                        <input type="text" name="section4_video_link" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section4_video_link }}">
                                        @if ($errors->has('section4_video_link'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section4_video_link') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 4 Image1*</label>
                                        <input type="file" name="section4_image1" class="form-control"
                                            id="floatingInputValue">
                                        <img src="{{ asset($homeCms->section4_image1) }}" alt="" width="200px"
                                            height="150px">
                                        @if ($errors->has('section4_image1'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section4_image1') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 4 Video link*</label>
                                        <input type="text" name="section4_video_link" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section4_video_link }}">
                                        @if ($errors->has('section4_video_link'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section4_video_link') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-3">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 4 Image1*</label>
                                        <input type="file" name="section4_image1" class="form-control"
                                            id="floatingInputValue">
                                        <img src="{{ asset($homeCms->section4_image1) }}" alt="" width="200px"
                                            height="150px">
                                        @if ($errors->has('section4_image1'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section4_image1') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 4 Image2*</label>
                                        <input type="file" name="section4_image2" class="form-control"
                                            id="floatingInputValue">
                                        <img src="{{ asset($homeCms->section4_image2) }}" alt="" width="200px"
                                            height="150px">
                                        @if ($errors->has('section4_image2'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section4_image2') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 4 Image3*</label>
                                        <input type="file" name="section4_image3" class="form-control"
                                            id="floatingInputValue">
                                        <img src="{{ asset($homeCms->section4_image3) }}" alt="" width="200px"
                                            height="150px">
                                        @if ($errors->has('section4_image3'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section4_image3') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 4 Image4*</label>
                                        <input type="file" name="section4_image4" class="form-control"
                                            id="floatingInputValue">
                                        <img src="{{ asset($homeCms->section4_image4) }}" alt="" width="200px"
                                            height="150px">
                                        @if ($errors->has('section4_image4'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section4_image4') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label">
                            <h3>Section 5:</h3>
                        </label>
                        <hr>

                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 5 Title*</label>
                                        <input type="text" name="section5_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section5_title }}">
                                        @if ($errors->has('section5_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('section5_title') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">1st Content*</label>
                                        <input type="text" name="section5_1st_content" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section5_1st_content }}">
                                        @if ($errors->has('section5_1st_content'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_1st_content') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">1st Content Details*</label>
                                        <textarea name="section5_1st_content_details" class="form-control" id="floatingInputValue">{{ $homeCms->section5_1st_content_details }}</textarea>
                                        @if ($errors->has('section5_1st_content_details'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_1st_content_details') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">2nd Content*</label>
                                        <input type="text" name="section5_2nd_content" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section5_2nd_content }}">
                                        @if ($errors->has('section5_2nd_content'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_2nd_content') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">2nd Content Details*</label>
                                        <textarea name="section5_2nd_content_details" class="form-control" id="floatingInputValue">{{ $homeCms->section5_2nd_content_details }}</textarea>
                                        @if ($errors->has('section5_2nd_content_details'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_2nd_content_details') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">3rd Content*</label>
                                        <input type="text" name="section5_3rd_content" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section5_3rd_content }}">
                                        @if ($errors->has('section5_3rd_content'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_3rd_content') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">3rd Content Details*</label>
                                        <textarea name="section5_3rd_content_details" class="form-control" id="floatingInputValue">{{ $homeCms->section5_3rd_content_details }}</textarea>
                                        @if ($errors->has('section5_3rd_content_details'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_3rd_content_details') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">4th Content*</label>
                                        <input type="text" name="section5_4th_content" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section5_4th_content }}">
                                        @if ($errors->has('section5_4th_content'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_4th_content') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">4th Content Details*</label>
                                        <textarea name="section5_4th_content_details" class="form-control" id="floatingInputValue">{{ $homeCms->section5_4th_content_details }}</textarea>
                                        @if ($errors->has('section5_4th_content_details'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_4th_content_details') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label">
                            <h3>Faq Section:</h3>
                        </label>
                        <hr>
                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Faq Title*</label>
                                        <input type="text" name="faq_section_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->faq_section_title }}">
                                        @if ($errors->has('faq_section_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('faq_section_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Question 1*</label>
                                        <input type="text" name="faq_1st_question" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->faq_1st_question }}">
                                        @if ($errors->has('faq_1st_question'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('faq_1st_question') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Answer 1*</label>
                                        <textarea name="faq_1st_answer" class="form-control" id="floatingInputValue">{{ $homeCms->faq_1st_answer }}</textarea>
                                        @if ($errors->has('faq_1st_answer'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('faq_1st_answer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Question 2*</label>
                                        <input type="text" name="faq_2nd_question" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->faq_2nd_question }}">
                                        @if ($errors->has('faq_2nd_question'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('faq_2nd_question') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Answer 2*</label>
                                        <textarea name="faq_2nd_answer" class="form-control" id="floatingInputValue">{{ $homeCms->faq_2nd_answer }}</textarea>
                                        @if ($errors->has('faq_2nd_answer'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('faq_2nd_answer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Question 3*</label>
                                        <input type="text" name="faq_3rd_question" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->faq_3rd_question }}">
                                        @if ($errors->has('faq_3rd_question'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('faq_3rd_question') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Answer 3*</label>
                                        <textarea name="faq_3rd_answer" class="form-control" id="floatingInputValue">{{ $homeCms->faq_3rd_answer }}</textarea>
                                        @if ($errors->has('faq_3rd_answer'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('faq_3rd_answer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Question 4*</label>
                                        <input type="text" name="faq_4th_question" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->faq_4th_question }}">
                                        @if ($errors->has('faq_4th_question'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('faq_4th_question') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Answer 4*</label>
                                        <textarea name="faq_4th_answer" class="form-control" id="floatingInputValue">{{ $homeCms->faq_4th_answer }}</textarea>
                                        @if ($errors->has('faq_4th_answer'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('faq_4th_answer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label">
                            <h3>Section 6:</h3>
                        </label>
                        <hr>

                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 6 Title*</label>
                                        <input type="text" name="section6_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section6_title }}">
                                        @if ($errors->has('section6_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section6_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 6 Image*</label>
                                        <input type="file" name="section6_image" class="form-control">
                                        @if ($errors->has('section6_image'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section6_image') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Preview</label>
                                        <br>
                                        <img src="{{ asset($homeCms->section6_image) }}" alt="" width="400px"
                                            height="180px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-xl-12">
                                <div class="btn-1">
                                    <button type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection

@push('scripts')
   
@endpush
