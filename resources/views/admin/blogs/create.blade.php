@extends('admin.layouts.master')
@section('title')
    Blog Create - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Create Blog</h4>
            <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
        </div>
        <div class="">
            <ul class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    Home
                </li>
                <li class=""> >>  Blog</li>
            </ul>
        </div>
    </section>

    <div class="main-content">
        <div class="inner_page">
            <div class="card-title">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="mb-0">Create</h4>
                    </div>
                </div>
            </div>
            <div class="card search_bar sales-report-card">
                <div class="sales-report-card-wrap">
                    <div class="form-head">
                        <h4>Blog Information</h4>
                    </div>
                    <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Title*</label>
                                        <input type="text" name="title" class="form-control" id="floatingInputValue"
                                            placeholder="Enter title*" value="{{ old('title') }}">
                                        @if ($errors->has('title'))
                                            <div class="error" style="color:red;">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Slug*</label>
                                        <input type="text" name="slug" class="form-control" id="floatingInputValue"
                                            placeholder="Enter slug*" value="{{ old('slug') }}">
                                        @if ($errors->has('slug'))
                                            <div class="error" style="color:red;">{{ $errors->first('slug') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Description*</label>
                                        <textarea name="description" class="form-control" id="editor1"
                                            placeholder="Enter description*" value="{{ old('description') }}">{{ old('description') }}</textarea>
                                        @if ($errors->has('description'))
                                            <div class="error" style="color:red;">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Conclusion*</label>
                                        <textarea name="conclusion" class="form-control" id="floatingInputValue"
                                            placeholder="Enter conclusion*" value="{{ old('conclusion') }}">{{ old('conclusion') }}</textarea>
                                        @if ($errors->has('conclusion'))
                                            <div class="error" style="color:red;">{{ $errors->first('conclusion') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="add-more-image">
                            <div class="row justify-content-between">
                                <div class="col-md-6 ">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue"> Blog Main Image *</label>
                                            <input type="file" name="main_image" class="form-control">
                                            @if ($errors->has('main_image'))
                                                <div class="error" style="color:red;">{{ $errors->first('main_image') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 ">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue"> Blog Image 1*</label>
                                            <input type="file" name="image1" class="form-control">
                                            @if ($errors->has('image1'))
                                                <div class="error" style="color:red;">{{ $errors->first('image1') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="add-more-image">
                            <div class="row justify-content-between">
                                <div class="col-md-6 ">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue"> Blog Image 2*</label>
                                            <input type="file" name="image2" class="form-control">
                                            @if ($errors->has('image2'))
                                                <div class="error" style="color:red;">{{ $errors->first('image2') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue">Status</label>
                                            <select name="status" class="form-select" aria-label="Default select example">
                                                <option selected value="">Select</option>
                                                <option value="1">Active</option>
                                                <option value="0">Deactive</option>
                                            </select>
                                            @if ($errors->has('status'))
                                                <div class="error" style="color:red;">{{ $errors->first('status') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row justify-content-between">
                            <div class="col-xl-12">
                                <div class="btn-1">
                                    <button type="submit">Create</button>
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
