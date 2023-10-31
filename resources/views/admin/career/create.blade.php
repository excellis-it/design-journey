@extends('admin.layouts.master')
@section('title')
    Career Create - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')


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
                        <h4>Career Information</h4>
                    </div>
                    <form action="{{ route('careers.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Name*</label>
                                        <input type="text" name="career_name" class="form-control" id="floatingInputValue"
                                            placeholder="Enter name*" value="{{ old('career_name') }}">
                                        @if ($errors->has('career_name'))
                                            <div class="error" style="color:red;">{{ $errors->first('career_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Location*</label>
                                        <input type="text" name="location" class="form-control" id="floatingInputValue"
                                            placeholder="Enter location*" value="{{ old('location') }}">
                                        @if ($errors->has('location'))
                                            <div class="error" style="color:red;">{{ $errors->first('location') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-more-image">
                            <div class="row justify-content-between">
                                <div class="col-md-6">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue">Onsite/Remote*</label>
                                            <input type="text" name="work_type" class="form-control" id="floatingInputValue"
                                                placeholder="Enter Work type*" value="{{ old('work_type') }}">
                                            @if ($errors->has('work_type'))
                                                <div class="error" style="color:red;">{{ $errors->first('work_type') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
    
    
                                <div class="col-md-6">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue">Job Type*</label>
                                            <input type="text" name="job_type" class="form-control" id="floatingInputValue"
                                                placeholder="Enter job type*" value="{{ old('job_type') }}">
                                            @if ($errors->has('job_type'))
                                                <div class="error" style="color:red;">{{ $errors->first('job_type') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Details*</label>
                                        <textarea name="details" class="form-control" id="editor1"
                                            placeholder="Enter details*" >{{ old('details') }}</textarea>
                                        @if ($errors->has('details'))
                                            <div class="error" style="color:red;">{{ $errors->first('details') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
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
