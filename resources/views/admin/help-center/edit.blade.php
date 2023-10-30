@extends('admin.layouts.master')
@section('title')
    Help-Center Edit - {{ env('APP_NAME') }}
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
                    <div class="form-head">
                        <h4>Help Center Information</h4>
                    </div>
                    <form action="{{ route('help-centers.update') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $help_center->id }}">
                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Name*</label>
                                        <select name="name" class="form-select"  aria-label="Default select example" >
                                            <option value="Tips & Tricks" {{ $help_center->name === 'Tips & Tricks' ? 'selected' : '' }}>Tips & Tricks</option>
                                            <option value="Support & Others" {{ $help_center->name === 'Support & Others' ? 'selected' : '' }}>Support & Others</option>
                                            <option value="Best Practices" {{ $help_center->name === 'Best Practices' ? 'selected' : '' }}>Best Practices</option>
                                            <option value="Our Design Process" {{ $help_center->name === 'Our Design Process' ? 'selected' : '' }}>Our Design Process</option>
                                            <option value="Design Journey" {{ $help_center->name === 'Design Journey' ? 'selected' : '' }}>Design Journey</option>
                                            <option value="Account & Subscription" {{ $help_center->name === 'Account & Subscription' ? 'selected' : '' }}>Account & Subscription</option>
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
                                            placeholder="Enter title*" value="{{ $help_center->title }}">
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
                                            <textarea name="details" id="editor1" class="form-control" placeholder="Enter details">{{ $help_center->details }}</textarea>
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
