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
                        <h4>Genearl Cms Information</h4>
                    </div>
                    <form action="{{ route('update.general-cms') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <input type="hidden" name="general_cms_id" value="{{ $general_cms->id }}">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Registration Title*</label>
                                        <input type="registration_title" name="registration_title" class="form-control" id="floatingInputValue"
                                            placeholder="Enter registration title*" value="{{ $general_cms->registration_title }}">
                                        @if ($errors->has('registration_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('registration_title') }}
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
                                        <label for="floatingInputValue">Registration Image*</label>
                                        <input type="file" name="registration_image" class="form-control">
                                        @if ($errors->has('registration_image'))
                                            <div class="error" style="color:red;">{{ $errors->first('registration_image') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <img src="{{ Storage::url($general_cms->registration_image) }}" alt="" width="400px"
                                            height="180px">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Login Title*</label>
                                        <input type="login_title" name="login_title" class="form-control" id="floatingInputValue"
                                            placeholder="Enter login title*" value="{{ $general_cms->login_title }}">
                                        @if ($errors->has('login_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('login_title') }}
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
                                        <label for="floatingInputValue">Login Image*</label>
                                        <input type="file" name="login_image" class="form-control">
                                        @if ($errors->has('login_image'))
                                            <div class="error" style="color:red;">{{ $errors->first('login_image') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <img src="{{ Storage::url($general_cms->login_image) }}" alt="" width="400px"
                                            height="180px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Website logo*</label>
                                        <input type="file" name="website_logo" class="form-control">
                                        @if ($errors->has('website_logo'))
                                            <div class="error" style="color:red;">{{ $errors->first('website_logo') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <img src="{{ Storage::url($general_cms->website_logo) }}" alt="" width="400px"
                                            height="180px">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Copyright Title*</label>
                                        <input type="text" name="copyright_title" class="form-control" id="floatingInputValue"
                                            placeholder="Enter copyright title*" value="{{ $general_cms->copyright_title }}">
                                        @if ($errors->has('copyright_title'))
                                            <div class="error" style="color:red;">{{ $errors->first('copyright_title') }}
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
