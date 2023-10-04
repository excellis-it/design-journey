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
                    Home /
                </li>
                <li class=""> Home Cms</li>
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
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Top Banner Image*</label>
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
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 2 1st Image*</label>
                                        <input type="file" name="section2_1st_image" class="form-control">
                                        @if ($errors->has('section2_1st_image'))
                                            <div class="error" style="color:red;">{{ $errors->first('section2_1st_image') }}
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
                                        <img src="{{ asset($homeCms->section2_1st_image) }}" alt="" width="400px"
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
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 2 2nd Image*</label>
                                        <input type="file" name="section2_2nd_image" class="form-control">
                                        @if ($errors->has('section2_2nd_image'))
                                            <div class="error" style="color:red;">{{ $errors->first('section2_2nd_image') }}
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
                                        <img src="{{ asset($homeCms->section2_2nd_image) }}" alt="" width="400px"
                                            height="180px">
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
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 2 3rd Image*</label>
                                        <input type="file" name="section2_3rd_image" class="form-control">
                                        @if ($errors->has('section2_3rd_image'))
                                            <div class="error" style="color:red;">{{ $errors->first('section2_3rd_image') }}
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
                                        <img src="{{ asset($homeCms->section2_3rd_image) }}" alt="" width="400px"
                                            height="180px">
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
                                        <input type="text" name="section3_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section3_title }}">
                                        @if ($errors->has('section3_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 3 Decription*</label>
                                        <textarea name="section3_detail" class="form-control" id="floatingInputValue">{{ $homeCms->section3_detail }}</textarea>
                                        @if ($errors->has('section3_detail'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_detail') }}</div>
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
                                        <input type="text" name="section3_title1" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section3_title1 }}">
                                        @if ($errors->has('section3_title1'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_title1') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">1st Short Details*</label>
                                        <textarea name="section3_detail1" class="form-control" id="floatingInputValue">{{ $homeCms->section3_detail1 }}</textarea>
                                        @if ($errors->has('section3_detail1'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_detail1') }}</div>
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
                                        <input type="text" name="section3_title2" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section3_title2 }}">
                                        @if ($errors->has('section3_title2'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_title2') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">2nd Short Details*</label>
                                        <textarea name="section3_detail2" class="form-control" id="floatingInputValue">{{ $homeCms->section3_detail2 }}</textarea>
                                        @if ($errors->has('section3_detail2'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_detail2') }}</div>
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
                                        <input type="text" name="section3_title3" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section3_title3 }}">
                                        @if ($errors->has('section3_title3'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_title3') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">3rd Short Details*</label>
                                        <textarea name="section3_detail3" class="form-control" id="floatingInputValue">{{ $homeCms->section3_detail3 }}</textarea>
                                        @if ($errors->has('section3_detail3'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_detail3') }}</div>
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
                                        <input type="text" name="section3_title4" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section3_title4 }}">
                                        @if ($errors->has('section3_title4'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_title4') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">4th Short Details*</label>
                                        <textarea name="section3_detail4" class="form-control" id="floatingInputValue">{{ $homeCms->section3_detail4 }}</textarea>
                                        @if ($errors->has('section3_detail4'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_detail4') }}</div>
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
                                        <input type="text" name="section3_title5" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section3_title5 }}">
                                        @if ($errors->has('section3_title5'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_title5') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">5th Short Details*</label>
                                        <textarea name="section3_detail5" class="form-control" id="floatingInputValue">{{ $homeCms->section3_detail5 }}</textarea>
                                        @if ($errors->has('section3_detail5'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section3_detail5') }}</div>
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
                                        <input type="text" name="section4_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section4_title }}">
                                        @if ($errors->has('section4_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section4_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 4 Details*</label>
                                        <textarea name="section4_detail" class="form-control" id="floatingInputValue">{{ $homeCms->section4_detail }}</textarea>
                                        @if ($errors->has('section4_detail'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section4_detail') }}</div>
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
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">1st Content*</label>
                                        <input type="text" name="section5_title1" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section5_title1 }}">
                                        @if ($errors->has('section5_title1'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_title1') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">1st Content Details*</label>
                                        <textarea name="section5_detail1" class="form-control" id="floatingInputValue">{{ $homeCms->section5_detail1 }}</textarea>
                                        @if ($errors->has('section5_detail1'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_detail1') }}</div>
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
                                        <input type="text" name="section5_title2" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section5_title2 }}">
                                        @if ($errors->has('section5_title2'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_title2') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">2nd Content Details*</label>
                                        <textarea name="section5_detail2" class="form-control" id="floatingInputValue">{{ $homeCms->section5_detail2 }}</textarea>
                                        @if ($errors->has('section5_detail2'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_detail2') }}</div>
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
                                        <input type="text" name="section5_title3" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section5_title3 }}">
                                        @if ($errors->has('section5_title3'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_title3') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">3rd Content Details*</label>
                                        <textarea name="section5_detail3" class="form-control" id="floatingInputValue">{{ $homeCms->section5_detail3 }}</textarea>
                                        @if ($errors->has('section5_detail3'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_detail3') }}</div>
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
                                        <input type="text" name="section5_title4" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->section5_title4 }}">
                                        @if ($errors->has('section5_title4'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_title4') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">4th Content Details*</label>
                                        <textarea name="section5_detail4" class="form-control" id="floatingInputValue">{{ $homeCms->section5_detail4 }}</textarea>
                                        @if ($errors->has('section5_detail4'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section5_detail4') }}</div>
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
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Question 1*</label>
                                        <input type="text" name="frequently_qs1" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->frequently_qs1 }}">
                                        @if ($errors->has('frequently_qs1'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('frequently_qs1') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Answer 1*</label>
                                        <textarea name="frequently_ans1" class="form-control" id="floatingInputValue">{{ $homeCms->frequently_ans1 }}</textarea>
                                        @if ($errors->has('frequently_ans1'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('frequently_ans1') }}</div>
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
                                        <input type="text" name="frequently_qs2" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->frequently_qs2 }}">
                                        @if ($errors->has('frequently_qs2'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('frequently_qs2') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Answer 2*</label>
                                        <textarea name="frequently_ans2" class="form-control" id="floatingInputValue">{{ $homeCms->frequently_ans2 }}</textarea>
                                        @if ($errors->has('frequently_ans2'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('frequently_ans2') }}</div>
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
                                        <input type="text" name="frequently_qs3" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->frequently_qs3 }}">
                                        @if ($errors->has('frequently_qs3'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('frequently_qs3') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Answer 3*</label>
                                        <textarea name="frequently_ans3" class="form-control" id="floatingInputValue">{{ $homeCms->frequently_ans3 }}</textarea>
                                        @if ($errors->has('frequently_ans3'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('frequently_ans3') }}</div>
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
                                        <input type="text" name="frequently_qs4" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->frequently_qs4 }}">
                                        @if ($errors->has('frequently_qs4'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('frequently_qs4') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Answer 4*</label>
                                        <textarea name="frequently_ans4" class="form-control" id="floatingInputValue">{{ $homeCms->frequently_ans4 }}</textarea>
                                        @if ($errors->has('frequently_ans4'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('frequently_ans4') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label">
                            <h3>End Section:</h3>
                        </label>
                        <hr>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Title*</label>
                                        <input type="text" name="service_business_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->service_business_title }}">
                                        @if ($errors->has('service_business_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('service_business_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Image*</label>
                                        <input type="file" name="service_business_image" class="form-control"
                                            id="floatingInputValue">
                                        <img src="{{ asset($homeCms->service_business_image) }}" alt="" width="200px"
                                            height="150px">
                                        @if ($errors->has('service_business_image'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('service_business_image') }}</div>
                                        @endif
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
