@extends('admin.layouts.master')
@section('title')
    All Subscription Details - {{ env('APP_NAME') }}
@endsection

@push('styles')
@endpush

@section('content')

<section class="section_breadcrumb d-block d-sm-flex justify-content-between">
    <div class="">
        <h4 class="page-title m-b-0">Subscription list</h4>
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

    <div class="inner_page">
        <div class="card-title">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <h4 class="mb-0">List</h4>
                </div>
                <div class="col-auto float-end ms-auto">
                    <a href="{{ route('subscription.mail.send') }}" class="btn add-btn"> Send Mail</a>
                </div>
                
            </div>
        </div>
        <div class="card table_sec">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subscriptions as $subscription)
                            <tr>
                                <td>
                                    {{ $subscription->name }}
                                </td>
                                <td>
                                    {{ $subscription->email }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection