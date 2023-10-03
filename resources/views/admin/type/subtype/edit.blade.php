@extends('admin.layouts.master')
@section('title')
    Sub Type Create - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Edit Sub Type</h4>
            <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
        </div>
        <div class="">
            <ul class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    Home
                </li>
                <li class=""> >> Sub Type</li>
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
                        <h4>Sub Type Information</h4>
                    </div>
                    <form action="{{ route('type.subtypes.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <input type="hidden" name="id" value="{{ $sub_type->id }}">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Type*</label>
                                        <select name="type_id" class="form-select" aria-label="Default select example">
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}" {{ $sub_type->type_id === $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Name*</label>
                                        <input type="text" name="name" class="form-control" id="floatingInputValue"
                                            placeholder="Enter name*" value="{{ $sub_type->name }}">
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between">    
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Slug*</label>
                                        <input type="text" name="slug" class="form-control" id="floatingInputValue"
                                            placeholder="Enter slug*" value="{{ $sub_type->slug }}">
                                        @if ($errors->has('slug'))
                                            <div class="error" style="color:red;">{{ $errors->first('slug') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Icon</label>
                                        <input type="file" name="icon" class="form-control">
                                        <img src="{{ asset($sub_type->icon) }}" alt="" width="50px" height="50px">
                                        @if ($errors->has('icon'))
                                            <div class="error" style="color:red;">{{ $errors->first('icon') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="row justify-content-between">
                            
                            <div class="col-md-">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Details*</label>
                                        <textarea name="details" class="form-control" id="floatingInputValue"
                                            placeholder="Enter details*">{{ $sub_type->details }}</textarea>
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
