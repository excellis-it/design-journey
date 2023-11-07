@extends('user.layouts.master')
@section('title')
Myplan - {{ env('APP_NAME') }} details
@endsection
@push('styles')
@endpush

@section('content')

<div class="main-content" style="min-height: 842px;">
   
    <div class="order-form">
        <div class="brief-tab-div">
            <div class="brief-tab-wrap">
                <div class="brief-tab">                
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <div class="brief-msg">
                              
                                <div class="qs-list">
                                    <div class="qs-head">
                                        <h2>1. Plan Name</h2>
                                        <h3>{{ $plan_details->plan->plan_name }}</h3>
                                    </div>
                                    <div class="qs-head">
                                        <h2>2. Plan Duration</h2>
                                        <h3>{{ $plan_details->plan->plan_duration }}</h3>
                                    </div>
                                    <div class="qs-head">
                                        <h2>3. Plan Details</h2>
                                        <h3>{{ $plan_details->plan->plan_details }}</h3>
                                    </div>
                                    <div class="qs-head">
                                        <h2>4. Plan Start Date</h2>
                                        <h3>{{ date('d-m-Y', strtotime($plan_details->payment_date)) }}</h3>
                                    </div>
                                    <div class="qs-head">
                                        <h2>5. Plan Expiry Date</h2>
                                        <h3>{{ date('d-m-Y', strtotime($plan_details->expiry_date)) }}</h3>
                                    </div>
                                    <div class="qs-head">
                                        <h2>6. Plan Amount</h2>
                                        <h3>${{ $plan_details->amount }}</h3>
                                    </div>
                                    <div class="qs-head">
                                        <h2>7. Plan Specifications</h2>
                                        @foreach($plan_details->plan->specification as $plan_specification)
                                        <h3><li> {{ $plan_specification->specification_name }}</li></h3>
                                        @endforeach
                                    </div>
                                   
                                </div>
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection