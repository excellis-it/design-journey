@extends('admin.layouts.master')
@section('title')
All Job Application Details - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')


<div class="main-content" style="min-height: 842px;">
    <div class="order-form">
        <!-- form -->
        <div class="product-div">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-info">
                        <h2>Job Details</h2>
                        <p class="description"><span class="career-details">Job Title:</span> {{ $job_apply_detail->career->career_name }}</p>
                        <p class="description"><span class="career-details">Name:</span> {{ $job_apply_detail->name }}</p>
                        <p class="description"><span class="career-details">Email:</span> {{ $job_apply_detail->email }}</p>
                        <p class="description"><span class="career-details">Introduction:</span> {{ $job_apply_detail->introduction }}</p>
                        <p class="description"><span class="career-details">Experience:</span> {{ $job_apply_detail->experience }}</p>
                        <p class="description"><span class="career-details">Country:</span> {{ $job_apply_detail->country }}</p>
                        <p class="description"><span class="career-details">US EST time availability:</span> {{ $job_apply_detail->us_time_available }}</p>
                        <p class="description"><span class="career-details">Expected salary:</span> ${{ $job_apply_detail->salary }}</p>
                        <p class="description"><span class="career-details">Resume:</span> <a href="{{ route('download.resume',$job_apply_detail->id) }}" target="_blank">View Resume</a></p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>



</div>

@endsection