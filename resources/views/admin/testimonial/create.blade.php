@extends('admin.layouts.master')
@section('title')
    Testimonial Create - {{ env('APP_NAME') }}
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
                        <h4>Testimonial</h4>
                    </div>
                    <form action="{{ route('testimonial.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Name*</label>
                                        <input type="text" name="name" class="form-control" id="floatingInputValue"
                                            placeholder="Enter name*" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Name*</label>
                                        <input type="file" name="image" class="form-control" id="floatingInputValue"
                                            placeholder="Enter image*" value="{{ old('image') }}">
                                        @if ($errors->has('image'))
                                            <div class="error" style="color:red;">{{ $errors->first('image') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Name*</label>
                                        <textarea name="message" class="form-control" id="floatingInputValue"
                                            placeholder="Enter message*"></textarea>
                                        @if ($errors->has('message'))
                                            <div class="error" style="color:red;">{{ $errors->first('message') }}</div>
                                        @endif
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
