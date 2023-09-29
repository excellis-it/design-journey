@extends('admin.layouts.master')
@section('title')
    Type Edit - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Edit Type</h4>
            <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
        </div>
        <div class="">
            <ul class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    Home
                </li>
                <li class=""> >>  Type</li>
            </ul>
        </div>
    </section>

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
                        <h4>Type Information</h4>
                    </div>
                    <form action="{{ route('update.type') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $type_detail->id }}">
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Name*</label>
                                        <input type="text" name="name" class="form-control" id="floatingInputValue"
                                            placeholder="Enter name*" value="{{ $type_detail->name }}">
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Slug*</label>
                                        <input type="text" name="slug" class="form-control" id="floatingInputValue"
                                            placeholder="Enter slug*" value="{{ $type_detail->slug }}">
                                        @if ($errors->has('slug'))
                                            <div class="error" style="color:red;">{{ $errors->first('slug') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Icon*</label>
                                        <input type="file" name="icon" class="form-control">
                                        <img src="{{ asset($type_detail->logo) }}" width="100px" height="100px" alt="icon">
                                        @if ($errors->has('icon'))
                                            <div class="error" style="color:red;">{{ $errors->first('icon') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Details*</label>
                                        <textarea name="details" class="form-control" id="floatingInputValue"
                                            placeholder="Enter details*">{{ $type_detail->details }}</textarea>
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
@endpush
