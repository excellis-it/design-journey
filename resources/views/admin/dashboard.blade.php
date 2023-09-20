@extends('admin.layouts.master')
@section('title')
    Dashboard - {{ env('APP_NAME') }} admin
@endsection
@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Dashboard</h4>
            <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
        </div>
        <div class="">
            <ul class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    Home
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ul>
        </div>
    </section>
    <div class="main-content" style="min-height: 842px;">
        <div class="dashboard_tab pt-5 pl-0 pb-5 pl-sm-5">
            <div class="">
                <div class="left_right">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mini_box small_bg_1">
                                        <h3>0</h3>
                                        <p>Today Confirmed Booking</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mini_box small_bg_2">
                                        <h3>49</h3>
                                        <p>This Month Booking</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mini_box small_bg_3">
                                        <h3>1063</h3>
                                        <p>Total Booking</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mini_box small_bg_4">
                                        <h3>0</h3>
                                        <p>Today Pending Booking</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mini_box small_bg_1">
                                        <h3>0</h3>
                                        <p>New Deposit Request</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mini_box small_bg_2">
                                        <h3>9</h3>
                                        <p>New Agent Request</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mini_box small_bg_3">
                                        <h3>76</h3>
                                        <p>Total Agents</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="mini_box small_bg_4">
                                        <h3>697,563</h3>
                                        <p>All Agent Balance</p>
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

@push('scripts')
@endpush
