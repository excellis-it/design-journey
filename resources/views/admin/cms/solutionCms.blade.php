@extends('admin.layouts.master')
@section('title')
    Solution Cms Edit - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Edit Solution Cms</h4>
            <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
        </div>
        <div class="">
            <ul class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    Home
                </li>
                <li class=""> >> Solution Cms</li>
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
                        <h4>Solution Cms Information</h4>
                    </div>
                    <form action="{{ route('solution.cms.update') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <label for="inputEnterYourName" class="col-form-label"><h3>Section 1:</h3></label>   
                        <hr> 

                        <div class="row justify-content-between">
                            <input type="hidden" name="solution_cms_id" value="{{ $solutionCms->id }}">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 1 Title*</label>
                                        <input type="text" name="section1_title" class="form-control"
                                            id="floatingInputValue" placeholder="Enter section1_title*"
                                            value="{{ $solutionCms->section1_title }}">
                                        @if ($errors->has('section1_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('section1_title') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 1 Details *</label>
                                        <textarea name="section1_content" class="form-control" id="floatingInputValue">{{ $solutionCms->section1_content }}</textarea>
                                        @if ($errors->has('section1_content'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section1_content') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 1 Image*</label>
                                        <input type="file" name="section1_image" class="form-control">
                                        @if ($errors->has('section1_image'))
                                            <div class="error" style="color:red;">{{ $errors->first('section1_image') }}
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
                                        <img src="{{ asset($solutionCms->section1_image) }}" alt="" width="400px"
                                            height="180px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label"><h3>Section 2:</h3></label>   
                        <hr> 


                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 2 Title*</label>
                                        <input type="text" name="section2_title" class="form-control"
                                            id="floatingInputValue" placeholder="Enter section2_title*"
                                            value="{{ $solutionCms->section2_title }}">
                                        @if ($errors->has('section2_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('section2_title') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Section 2 Details *</label>
                                        <textarea name="section2_content" class="form-control" id="floatingInputValue">{{ $solutionCms->section2_content }}</textarea>
                                        @if ($errors->has('section2_content'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('section2_content') }}</div>
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
                                        <img src="{{ asset($solutionCms->section2_image) }}" alt="" width="400px"
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
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection

@push('scripts')


@endpush
