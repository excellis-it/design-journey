@extends('admin.layouts.master')
@section('title')
    Free Illustration Create - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Create Free Illustration Category</h4>
            <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
        </div>
        <div class="">
            <ul class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    Home
                </li>
                <li class=""> >>  Free Illustration Category</li>
            </ul>
        </div>
    </section>

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
                        <h4>Blog Information</h4>
                    </div>
                    <form action="{{ route('free-illustrations.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Category*</label>
                                        <input type="text" name="illustration_category" class="form-control" id="floatingInputValue"
                                            placeholder="Enter category*" value="{{ old('illustration_category') }}">
                                        @if ($errors->has('illustration_category'))
                                            <div class="error" style="color:red;">{{ $errors->first('illustration_category') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Slug*</label>
                                        <input type="text" name="category_slug" class="form-control" id="floatingInputValue"
                                            placeholder="Enter category slug*" value="{{ old('category_slug') }}">
                                        @if ($errors->has('category_slug'))
                                            <div class="error" style="color:red;">{{ $errors->first('category_slug') }}</div>
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
