@extends('admin.layouts.master')
@section('title')
    Category Create - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Create Plan</h4>
            <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
        </div>
        <div class="">
            <ul class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    Home
                </li>
                <li class=""> >> Plan</li>
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
                        <h4>
                            Plan Information</h4>
                    </div>
                    <form action="{{ route('plans.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Name*</label>
                                        <input type="text" name="plan_name" class="form-control" id="floatingInputValue"
                                            placeholder="Enter plan name*" value="{{ old('plan_name') }}">
                                        @if ($errors->has('plan_name'))
                                            <div class="error" style="color:red;">{{ $errors->first('plan_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Details*</label>
                                        <input type="text" name="plan_details" placeholder="Enter plan details*" class="form-control" value="{{ old('plan_details') }}" id="floatingInputValue">
                                        @if ($errors->has('plan_details'))
                                            <div class="error" style="color:red;">{{ $errors->first('plan_details') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Duration*</label>
                                        <select name="plan_duration" class="form-select" aria-label="Default select example">
                                            <option selected value="">Select</option>
                                            <option value="monthly">Monthly</option>
                                            <option value="quarterly">Quarterly</option>
                                            <option value="yearly">Yearly</option>
                                        </select>
                                        @if ($errors->has('plan_duration'))
                                            <div class="error" style="color:red;">{{ $errors->first('plan_duration') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Price*</label>
                                        <input type="text" name="plan_price" class="form-control" placeholder="Enter plan price*" id="floatingInputValue" value="{{ old('plan_price') }}">
                                        @if ($errors->has('plan_price'))
                                            <div class="error" style="color:red;">{{ $errors->first('plan_price') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="add-more-specification">
                            <div class="row justify-content-between">
                                <div class="col-md-6 ">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue"> Specification*</label>
                                            <input type="text" name="specification[]" placeholder="Enter plan specification*" class="form-control">
                                            @if ($errors->has('specification'))
                                                <div class="error" style="color:red;">{{ $errors->first('specification') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <a class="btn btn-primary add-specification">Add Specification</a>
                                        </div>
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
<script>
    // add more functionality for milestone
    $(document).ready(function() {
            var Count = 1;
        $('.add-specification').click(function() {
            Count++;
            var html = '';
            html += '<div class="row">';
            html += '<div class="col-md-6">';
            html += '<div class="form-group-div">';
            html += '<div class="form-group">';
            html += '<label for="floatingInputValue">' +Count+ ' Specification*</label>';
            html += '<input type="text" name="specification[]" placeholder="Enter plan specification*" class="form-control">';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '<div class="col-md-6">';
            html += '<div class="form-group-div">';
            html += '<div class="form-group">';
            html += '<a class="btn btn-danger remove">Remove</a>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('.add-more-specification').append(html);
        });
        $(document).on('click', '.remove', function() {
            $(this).closest('.row').remove();
            Count--;
        });
    });
</script>
    
@endpush
