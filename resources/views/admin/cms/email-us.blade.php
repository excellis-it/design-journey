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
                        <h4>Email Us</h4>
                    </div>
                    <form action="{{ route('update-email-us') }}" method="post">
                        @csrf
                        <div class="row justify-content-between">
                            <input type="hidden" name="email_us_id" value="{{ $email_us->id }}">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Email*</label>
                                        <input type="text" name="email" class="form-control" id="floatingInputValue"
                                            placeholder="Enter email*" value="{{ $email_us->email }}">
                                        @if ($errors->has('email'))
                                            <div class="error" style="color:red;">{{ $errors->first('email') }}
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
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection

@push('scripts')
@endpush
