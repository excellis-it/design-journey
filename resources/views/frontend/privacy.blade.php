@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Home
@endsection
@push('styles')
@endpush

@section('content')

    <!-- header - start -->
        <div class="header">
            <div class="header-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="header-content">
                                <h1 class="m-horz-auto heading-width-res-full heading-width-83 t-center">Privacy Policy</h1>
                                <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">{!! $privacy->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header - end -->

@endsection