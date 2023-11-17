@extends('admin.layouts.master')
@section('title')
    Footer Cms Create - {{ env('APP_NAME') }}
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
                        <h4>Footer Cms Information</h4>
                    </div>
                    <form action="{{ route('footer-cms.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Social Icon*</label>
                                        <input type="text" name="social_icon" class="form-control" id="floatingInputValue"
                                            placeholder="Enter icon (fas fa-user)*" value="{{ old('social_icon') }}">
                                        @if ($errors->has('social_icon'))
                                            <div class="error" style="color:red;">{{ $errors->first('social_icon') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Social Link*</label>
                                        <input type="text" name="social_link" class="form-control" id="floatingInputValue"
                                            placeholder="Enter Link*" value="{{ old('social_link') }}">
                                        @if ($errors->has('social_link'))
                                            <div class="error" style="color:red;">{{ $errors->first('social_link') }}</div>
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
    
@endpush
