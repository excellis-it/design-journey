
@extends('user.layouts.master')
@section('title')
    Dashboard - {{ env('APP_NAME') }} user
@endsection
@push('styles')
@endpush

@section('content')

<div class="main-content" style="min-height: 842px;">

    <div class="dashboard_tab pt-5 pl-0 pb-5 pl-sm-5">
        <ul class="nav" role="tablist" id="myTab">
            {{-- <li role="presentation">
                <a href="index.html" class="active"><i class="ph-airplane-tilt"></i> Flight</a>
            </li>
            <li role="presentation"><a href=""><i class="ph-buildings"></i> Hotel</a></li> --}}
        </ul>
    </div>
</div>

@endsection