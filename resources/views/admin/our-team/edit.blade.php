@extends('admin.layouts.master')
@section('title')
    Our Team Edit - {{ env('APP_NAME') }}
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
                        <h4>Our Team Information</h4>
                    </div>
                    <form action="{{ route('update.our-teams') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $our_team->id }}">
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Name*</label>
                                        <input type="text" name="name" class="form-control" id="floatingInputValue"
                                            placeholder="Enter name*" value="{{ $our_team->name }}">
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Designation*</label>
                                        <input type="text" name="designation" class="form-control" id="floatingInputValue"
                                            placeholder="Enter designation*" value="{{ $our_team->designation }}">
                                        @if ($errors->has('designation'))
                                            <div class="error" style="color:red;">{{ $errors->first('designation') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div> 
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Image*</label>
                                        <input type="file" name="image" class="form-control" id="floatingInputValue"
                                            placeholder="Enter image*">
                                        @if ($errors->has('image'))
                                            <div class="error" style="color:red;">{{ $errors->first('image') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>   
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Image Preview</label> 
                                        <br>
                                        <a href="{{Storage::url($our_team->image)}}" target="_blank">                                     
                                        <img src="{{Storage::url($our_team->image)}}" style="width:200px;height:250px;">
                                        </a>
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
