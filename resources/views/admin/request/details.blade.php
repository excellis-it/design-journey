@extends('admin.layouts.master')
@section('title')
All Request Details - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')

<section class="section_breadcrumb d-block d-sm-flex justify-content-between">
    <div class="">
        <h4 class="page-title m-b-0">Request details</h4>
        <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
    </div>
    <div class="">
        <ul class="breadcrumb breadcrumb-style">
            <li class="breadcrumb-item">
                Home
            </li>
            <li class=""> >> Request Details</li>
        </ul>
    </div>
</section>
<div class="main-content" style="min-height: 842px;">
    <div class="order-form">
        <!-- form -->
        <div class="product-div">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-info">
                        <h2>User details</h2>
                        <p class="description">{{ $request_details->User->name }}</p>
                        <p class="description">{{ $request_details->User->email }}</p>
                        <p class="description">{{ $request_details->User->phone }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-info">
                        <h2>Project Details</h2>
                        <p class="description">{{ $request_details->Type->name }}</p>
                        <p class="description">Subtype: {{ $request_details->Subtype->name }}</p>
                        <p class="description">Request Name : {{ $request_details->request_name }}</p>
                        <p class="description">Design Type : {{ $request_details->design_type }}</p>
                        <p class="description">No of Pages : {{ $request_details->pages_number }}</p>
                        <p class="description">{{ $request_details->brand_name }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="order-form">
        <!-- form -->
        <div class="product-info">
            <div class="form-head">
                <h4>Upload File</h4>
            </div>
            <form action="{{ route('request.file-upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-between">

                    <input type="hidden" name="user_id" value="{{ $request_details->user_id }}">
                    <input type="hidden" name="request_id" value="{{ $request_details->id }}">

                    <div class="col-md-6">
                        <div class="form-group-div">
                            <div class="form-group">
                                <label for="floatingInputValue"> Upload*</label>
                                <input type="file" name="upload_zip" class="form-control" id="floatingInputValue" value="{{ old('upload_zip') }}">
                                @if ($errors->has('upload_zip'))
                                <div class="error" style="color:red;">{{ $errors->first('upload_zip') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-div">
                            <div class="form-group">
                                <label for="floatingInputValue"> Description</label>
                                <textarea name="description" class="form-control" id="floatingInputValue" placeholder="Enter description" value="{{ old('description') }}"></textarea>
                                @if ($errors->has('description'))
                                <div class="error" style="color:red;">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-between">
                    <div class="col-xl-12">
                        <div class="btn-1">
                            <button type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

</div>

@endsection