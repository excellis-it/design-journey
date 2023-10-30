@extends('admin.layouts.master')
@section('title')
    Category Create - {{ env('APP_NAME') }}
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
                        <h4>Help Center Information</h4>
                    </div>
                    <form action="{{ route('help-centers.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Name*</label>
                                        <select name="name" class="form-select"  aria-label="Default select example" >
                                            <option value="" selected>Select</option>
                                            <option value="Tips & Tricks">Tips & Tricks</option>
                                            <option value="Support & Others">Support & Others</option>
                                            <option value="Best Practices">Best Practices</option>
                                            <option value="Our Design Process">Our Design Process</option>
                                            <option value="Design Journey">Design Journey</option>
                                            <option value="Account & Subscription">Account & Subscription</option>
                                        </select>
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                           
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Title*</label>
                                        <input type="text" name="title" class="form-control" id="floatingInputValue"
                                            placeholder="Enter title*" value="{{ old('title') }}">
                                        @if ($errors->has('title'))
                                            <div class="error" style="color:red;">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-more-image">
                            <div class="row justify-content-between">
                                <div class="col-md-12">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue"> Details*</label>
                                            <textarea name="details"  id="editor1" class="form-control" placeholder="Enter details" value="{{ old('details') }}"></textarea>
                                            @if ($errors->has('details'))
                                                <div class="error" style="color:red;">{{ $errors->first('details') }}</div>
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
