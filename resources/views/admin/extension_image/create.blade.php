@extends('admin.layouts.master')
@section('title')
    Extension Image Create - {{ env('APP_NAME') }}
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
                        <h4>Extension Information</h4>
                    </div>
                    <form action="{{ route('extension-images.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Extension*</label>
                                        <input type="text" name="extension" class="form-control" id="floatingInputValue"
                                            placeholder="Enter extension*" value="{{ old('extension') }}">
                                        @if ($errors->has('extension'))
                                            <div class="error" style="color:red;">{{ $errors->first('extension') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">File type*</label>
                                        <input type="text" name="name" class="form-control" id="floatingInputValue"
                                            placeholder="Enter name*" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Image*</label>
                                        <input type="file" name="image" class="form-control">
                                        @if ($errors->has('image'))
                                            <div class="error" style="color:red;">{{ $errors->first('image') }}</div>
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
