@extends('admin.layouts.master')
@section('title')
    Home Cms Edit - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
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
                    
                    <form action="{{ route('home.cms.update') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <label for="inputEnterYourName" class="col-form-label">
                            <h3>Hero Section:</h3>
                        </label>
                        <hr>
                     
                        <div class="row justify-content-between">
                            <input type="hidden" name="home_cms_id" value="{{ $homeCms->id }}">

                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Main Content1*</label>
                                        <input type="text" name="main_title1" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->main_title1 }}">
                                        @if ($errors->has('main_title1'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('main_title1') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="add-more-content">
                            <div class="row justify-content-between">
                                {{-- <div class="col-md-6">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue">Main Content2*</label>
                                            <input type="text" name="main_title2[]" class="form-control"
                                                id="floatingInputValue" placeholder="Enter content">
                                            @if ($errors->has('main_title2'))
                                                <div class="error" style="color:red;">
                                                    {{ $errors->first('main_title2') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-md-6">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <a class="btn btn-primary add-content">Add content</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            @foreach(explode(',', $homeCms->main_title2) as $key=>$value)
                                <div class="col-md-6 remove_title2_{{ $key }}" >
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue">Design</label>   
                                            <input type="text" name="main_title2[]" class="form-control" id="floatingInputValue" placeholder="Enter content" value="{{$value}}">
                                        </div>
                                    </div>  
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                        <a class="btn btn-danger" onclick="removeDesign($key)">Remove</a>
                                        </div>
                                    </div>
                                </div> 
                            @endforeach                  
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Main Content3*</label>
                                        <input type="text" name="main_title3" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->main_title3 }}">
                                        @if ($errors->has('main_title3'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('main_title3') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Banner Sub-title*</label>
                                        <input type="text" name="banner_sub_title" class="form-control"
                                            id="floatingInputValue" value="{{ $homeCms->banner_sub_title }}">
                                        @if ($errors->has('banner_sub_title'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('banner_sub_title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
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
                                        <img src="{{Storage::url($homeCms->banner_image)}}" alt="" width="400px"
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
                                        <img src="{{Storage::url($homeCms->section2_1st_image)}}" alt="" width="400px"
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
                                        <img src="{{Storage::url($homeCms->section2_2nd_image)}}" alt="" width="400px"
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
                                        <img src="{{Storage::url($homeCms->section2_3rd_image)}}" alt="" width="400px"
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
                                        <img src="{{Storage::url($homeCms->section3_image)}}" alt="" width="400px"
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
                                        <img src="{{Storage::url($homeCms->section4_image1)}}" alt="" width="200px"
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
                                        <img src="{{Storage::url($homeCms->section4_image2)}}" alt="" width="200px"
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
                                        <img src="{{Storage::url($homeCms->section4_image3)}}" alt="" width="200px"
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
                                        <img src="{{Storage::url($homeCms->section4_image4)}}" alt="" width="200px"
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
                                        <img src="{{Storage::url($homeCms->service_business_image)}}" alt="" width="200px"
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

<script>
    // add more functionality for milestone
    $(document).ready(function() {
        $('.add-content').click(function() {
            
            var html = '';
            html += '<div class="row">';
            html += '<div class="col-md-6">';
            html += '<div class="form-group-div">';
            html += '<div class="form-group">';
            html += '<label for="floatingInputValue"> Design</label>';
            html += '<input type="test" name="main_title2[]" class="form-control" placeholder="Enter content">';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '<div class="col-md-6">';
            html += '<div class="form-group-div">';
            html += '<div class="form-group">';
            html += '<a class="btn btn-danger remove">Remove</a>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('.add-more-content').append(html);
        });
        $(document).on('click', '.remove', function() {
            $(this).closest('.row').remove();
        });
    });
</script>
<script>
   function removeDesign(id)
   {

        $('.remove_title2_'+id).remove();
   }
</script>

@endpush
