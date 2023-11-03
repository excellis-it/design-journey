@extends('admin.layouts.master')
@section('title')
    About Cms Edit - {{ env('APP_NAME') }}
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
                        <h4>Contact Cms Information</h4>
                    </div>
                    <form action="{{ route('update-contact-us') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <input type="hidden" name="contact_cms_id" value="{{ $contact_us->id }}">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Title*</label>
                                        <input type="text" name="text" class="form-control" id="floatingInputValue"
                                            placeholder="Enter text*" value="{{ $contact_us->text }}">
                                        @if ($errors->has('text'))
                                            <div class="error" style="color:red;">{{ $errors->first('text') }}
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
                                        <label for="floatingInputValue">Image*</label>
                                        <input type="file" name="image" class="form-control">
                                        @if ($errors->has('image'))
                                            <div class="error" style="color:red;">{{ $errors->first('image') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Preview</label>
                                        <br>
                                        <img src="{{ Storage::url($contact_us->image) }}" alt="" width="400px"
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
