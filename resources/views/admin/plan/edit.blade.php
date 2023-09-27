@extends('admin.layouts.master')
@section('title')
    Category Edit - {{ env('APP_NAME') }}
@endsection
@push('styles')
    <style>
        .image-area {
            position: relative;
            width: 15%;
            background: #333;
        }

        .image-area img {
            max-width: 100%;
            height: auto;
        }

        .remove-image {
            display: none;
            position: absolute;
            top: -10px;
            right: -10px;
            border-radius: 10em;
            padding: 2px 6px 3px;
            text-decoration: none;
            font: 700 21px/20px sans-serif;
            background: #555;
            border: 3px solid #fff;
            color: #FFF;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.5), inset 0 2px 4px rgba(0, 0, 0, 0.3);
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
            -webkit-transition: background 0.5s;
            transition: background 0.5s;
        }

        .remove-image:hover {
            background: #E54E4E;
            padding: 3px 7px 5px;
            top: -11px;
            right: -11px;
        }

        .remove-image:active {
            background: #E54E4E;
            top: -10px;
            right: -11px;
        }
    </style>
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Edit Plan</h4>
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
                        <h4 class="mb-0">Edit</h4>
                    </div>
                </div>
            </div>
            <div class="card search_bar sales-report-card">
                <div class="sales-report-card-wrap">
                    <div class="form-head">
                        <h4>Plan Information</h4>
                    </div>
                    <form action="{{ route('update.plans') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Name*</label>
                                        <input type="text" name="plan_name" class="form-control" id="floatingInputValue"
                                            placeholder="Enter plan name*" value="{{ $plan->plan_name }}">
                                        @if ($errors->has('plan_name'))
                                            <div class="error" style="color:red;">{{ $errors->first('plan_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="plan_id" value="{{ $plan->id }}">

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Details*</label>
                                        <input type="text" name="plan_details" placeholder="Enter plan details*"
                                            class="form-control" value="{{ $plan->plan_details }}" id="floatingInputValue">
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
                                        <select name="plan_duration" class="form-select"
                                            aria-label="Default select example">
                                            <option selected value="">Select</option>
                                            <option value="monthly"
                                                {{ $plan->plan_duration == 'monthly' ? 'selected' : '' }}>Monthly</option>
                                            <option value="quarterly"
                                                {{ $plan->plan_duration == 'quarterly' ? 'selected' : '' }}>Quarterly
                                            </option>
                                            <option value="yearly" {{ $plan->plan_duration == 'yearly' ? 'selected' : '' }}>
                                                Yearly</option>
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
                                        <input type="text" name="plan_price" class="form-control"
                                            placeholder="Enter plan price*" id="floatingInputValue"
                                            value="{{ $plan->plan_price }}">
                                        @if ($errors->has('plan_price'))
                                            <div class="error" style="color:red;">{{ $errors->first('plan_price') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                            <div class="row justify-content-between">
                                {{-- <div class="col-md-6 ">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue"> Specification*</label>
                                            <input type="text" name="specification[]"
                                                placeholder="Enter plan specification*" class="form-control">

                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-md-6">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <a class="btn btn-primary add-specification">Add Specification</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       

                    

                        <div class="row">
                            @foreach ($plan->specification as $index => $specification)
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">{{ $index+1 }} Specification*</label>
                                        <input type="text" name="specification[]" value="{{ $specification['specification_name'] }}"
                                            placeholder="Enter plan specification*" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <a class="btn btn-danger remove-specification" href="javascript:void(0);"
                                        data-id="{{ $specification['id'] }}">Remove</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="add-more-specification">
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
    <script>
        // add more functionality for milestone
        $(document).ready(function() {
            var specification_count = '{{ $plan->specification->count() }}';
            var count = 1;
            var Count = parseInt(specification_count);
            $('.add-specification').click(function() {
                Count++;
                var html = '';
                html += '<div class="row">';
                html += '<div class="col-md-6">';
                html += '<div class="form-group-div">';
                html += '<div class="form-group">';
                html += '<label for="floatingInputValue">' + Count + ' Specification*</label>';
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

    <script>
        $('.remove-specification').on('click', function() {
            var result = confirm('Are you sure you want to delete?');

            if (result) {
                var id = $(this).attr('data-id');
                $.ajax({
                    url: '/admin/plans/deleteSpecification/' + id,
                    type: 'get',
                    success: function(response) {
                        $('#' + id).hide();
                    }
                });
            } else {
                return false;
            }
        });
    </script>
@endpush