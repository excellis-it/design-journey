@extends('user.layouts.master')
@section('title')
    Blog Create - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
<div class="main-content" style="min-height: 842px;">
    <!-- form -->
    <div class="order-form">
        <form action="{{ route('presentation.submit') }}" method="post" enctype="multipart/form-data">
            @csrf

            <input type='hidden' name='sub_type_id' value='{{ $id }}' />


            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>1. First, Name Your
                            Request</label>
                        <input type="text" class="form-control" name="request_name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>2. Select your Brand Profile <span>(Optional)</span></label>
                        <select class="form-select" name="brand_name" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="xyz">Xyz</option>
                            <option value="abc">Abc</option>
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
                                    <input class="form-check-input" type="radio" name="design_type"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">New Design</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="design_type"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Re-Design</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>4. How many pages/ Slidesdo you need? </label>
                        <select class="form-select" name="pages_number" aria-label="Default select example">
                            <option selected>Select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <label>5. What size and format do you need?</label>
                        <textarea class="form-control" id="" placeholder="" name="size_format" rows="4"></textarea>
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
                                <div class="btn-up-file"><span class="up-file-icon"><i class="ph ph-file-plus"></i></span></div>
                                <div class="btn-up">
                                    <span class="up-icon"><i class="ph ph-arrow-fat-line-up"></i></span> Upload</div>
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
                                    <input class="form-check-input" type="radio" name="custom_illustration"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="custom_illustration"
                                        id="inlineRadio2" value="option2">
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