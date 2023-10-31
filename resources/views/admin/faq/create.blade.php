@extends('admin.layouts.master')
@section('title')
    Faq Create - {{ env('APP_NAME') }}
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
                        <h4>Faq Information</h4>
                    </div>
                    <form action="{{ route('faqs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                          
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Question*</label>
                                        <input type="text" name="question" class="form-control" id="floatingInputValue"
                                            placeholder="Enter question*" value="{{ old('question') }}">
                                        @if ($errors->has('question'))
                                            <div class="error" style="color:red;">{{ $errors->first('question') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="row justify-content-between">

                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Answer*</label>
                                        <textarea name="answer" class="form-control" id="floatingInputValue"
                                            placeholder="Enter answer*" value="{{ old('answer') }}"></textarea>
                                        @if ($errors->has('answer'))
                                            <div class="error" style="color:red;">{{ $errors->first('answer') }}</div>
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
