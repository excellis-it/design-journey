@extends('admin.layouts.master')
@section('title')
    Free Icons Edit - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Edit Free Icons Category</h4>
            <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
        </div>
        <div class="">
            <ul class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    Home
                </li>
                <li class=""> >> Free Icons Category</li>
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
                        <h4>Free illustration Information</h4>
                    </div>
                    <form action="{{ route('update.icons') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">

                            <input type="hidden" name="id" value="{{ $icon_category->id }}" >
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Category*</label>
                                        <input type="text" name="icon_category" class="form-control"
                                            id="floatingInputValue" placeholder="Enter category*"
                                            value="{{ $icon_category->category_name }}">
                                        @if ($errors->has('icon_category'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('icon_category') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Slug*</label>
                                        <input type="text" name="category_slug" class="form-control"
                                            id="floatingInputValue" placeholder="Enter category slug*"
                                            value="{{ $icon_category->category_slug }}">
                                        @if ($errors->has('category_slug'))
                                            <div class="error" style="color:red;">{{ $errors->first('category_slug') }}
                                            </div>
                                        @endif
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
