@extends('user.layouts.master')
@section('title')
    Order - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
    <div class="main-content" style="min-height: 842px;">
        <div class="order-form">
            <div class="order-heading text-left">
              <h3>{{ $sub_type->name }}</h3>
              <p>{{ $sub_type->details }}</p>
           </div> 
            <form action="{{ route('presentation.submit') }}" method="post" enctype="multipart/form-data">
                @csrf

                <input type='hidden' name='sub_type_id' value='{{ $id }}' />
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>1. First, Name Your
                                Request</label>
                            <input type="text" class="form-control" name="request_name">
                            @if ($errors->has('request_name'))
                                <div class="error" style="color:red;">{{ $errors->first('request_name') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>2. Select your Brand Profile <span>(Optional)</span></label>
                            <select class="form-select" name="brand_name" aria-label="Default select example">
                                <option selected>Select</option>
                                @foreach($brands as $brand)
                                <option value="{{ $brand->brand_name }}">{{ $brand->brand_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>3. Which type of design you need?</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="design_type" id="inlineRadio1"
                                            value="new-design">
                                        <label class="form-check-label" for="inlineRadio1">New Design</label>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="design_type" id="inlineRadio2"
                                            value="re-design">
                                        <label class="form-check-label" for="inlineRadio2">Re-Design</label>

                                    </div>
                                </div>
                                @if ($errors->has('design_type'))
                                    <div class="error" style="color:red;">{{ $errors->first('design_type') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>4. How many pages/ Slidesdo you need? </label>
                            <select class="form-select" name="pages_number" aria-label="Default select example">
                                <option selected value="">Select</option>
                                <option value="One">One</option>
                                <option value="Two">Two</option>
                                <option value="Three">Three</option>
                            </select>
                            @if ($errors->has('pages_number'))
                                <div class="error" style="color:red;">{{ $errors->first('pages_number') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>5. What size and format do you need?</label>
                            <textarea class="form-control" id="" placeholder="" name="size_format" rows="4"></textarea>
                            @if ($errors->has('size_format'))
                                <div class="error" style="color:red;">{{ $errors->first('size_format') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>6. What copy should we include in the presentation?
                                <span>(Optional)</span></label>
                            <textarea class="form-control" id="" name="copy_presentation" placeholder="" rows="3"></textarea>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group">
                            <label>
                                7. Upload any design, assets or inspitration we should follow
                                <span>(Optional)</span>
                                <div class="up-file">
                                    <input type="file" name="demo_design_file" hidden />
                                    <div class="btn-up-file"><span class="up-file-icon"><i
                                                class="ph ph-file-plus"></i></span></div>
                                    <div class="btn-up">
                                        <span class="up-icon"><i class="ph ph-arrow-fat-line-up"></i></span> Upload
                                    </div>
                            </label>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="form-group">
                    <label>8. Does your design project require custom illustrations / icons? <span>(optional)</span></label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="custom_illustration" id="inlineRadio1"
                                    value="Yes">
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="custom_illustration"
                                    id="inlineRadio2" value="No">
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="form-group">
                    <label>9. Do you have any additional information? <span>(optional)</span></label>
                    <textarea class="form-control" id="" name="additional_information" placeholder="" rows="4"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
