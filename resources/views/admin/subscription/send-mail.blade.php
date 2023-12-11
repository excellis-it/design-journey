@extends('admin.layouts.master')
@section('title')
    All Subscription Details - {{ env('APP_NAME') }}
@endsection

@push('styles')
@endpush

@section('content')
    <div class="main-content">
        <div class="inner_page">
            <div class="card-title">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="mb-0">Send Mail</h4>
                    </div>
                </div>
            </div>
            <div class="card search_bar sales-report-card">
                <div class="sales-report-card-wrap">
                    <div class="form-head">
                        <h4>Select User</h4>
                    </div>
                    <form action="{{ route('subscription.mail.submit') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="multiselect-form">
                                    <div class="form-group">
                                        <label class="multi-label" for="floatingInputValue">Select 2</label>
                                        <select name="email[]" id="field2" multiple multiselect-search="true"
                                            multiselect-select-all="true" multiselect-max-items="3"
                                            onchange="console.log(this.selectedOptions)">
                                            @foreach($subscriptions as $subscription)
                                                <option value="{{ $subscription->email }}">{{ $subscription->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Content</label>
                                        <textarea name="content" class="form-control" id="editor1"
                                            placeholder="Enter what inside*" value="{{ old('whats_inside') }}"></textarea>
                                        @if ($errors->has('whats_inside'))
                                            <div class="error" style="color:red;">{{ $errors->first('whats_inside') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">

                            <div class="col-xl-12">
                                <div class="btn-1">
                                    <button type="submit">Send</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
    <script src="{{ asset('admin_assets/assets/js/multiselect-dropdown.js') }}"></script>

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