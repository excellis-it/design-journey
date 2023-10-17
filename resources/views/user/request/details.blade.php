
@extends('user.layouts.master')
@section('title')
    Request - {{ env('APP_NAME') }} user
@endsection
@push('styles')
@endpush

@section('content')

<div class="main-content" style="min-height: 842px;">
<!-- form -->
<div class="order-form">
    
        
        <div class="product-info">
            <h1>{{ $user_request->request_name }}</h1>
            <p class="description">{{ $user_request->size_format }}</p>
            <p class="description">Design Type : {{ $user_request->design_type }}</p>
            <p class="description">No of Pages : {{ $user_request->pages_number }}</p>
            <p class="description">{{  $user_request->brand_name }}</p>
        </div>
   
</div>
</div>
@endsection
