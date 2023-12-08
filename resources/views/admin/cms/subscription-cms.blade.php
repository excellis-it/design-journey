@extends('admin.layouts.master')
@section('title')
    Subscription Cms Edit - {{ env('APP_NAME') }}
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
                        <h4>Subscription Cms Information</h4>
                    </div>
                    <form action="{{ route('update.subscription-cms') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <input type="hidden" name="subscription_cms_id" value="{{ $subscription_cms->id }}">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Title*</label>
                                        <input type="text" name="title" class="form-control" id="floatingInputValue"
                                            placeholder="Enter title*" value="{{ $subscription_cms->title }}">
                                        @if ($errors->has('title'))
                                            <div class="error" style="color:red;">{{ $errors->first('title') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Image</label>
                                        <input type="file" name="image" class="form-control">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Preview</label>
                                        <br>
                                        <img src="{{ Storage::url($subscription_cms->image) }}" alt="" width="400px"
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
