@extends('user.layouts.master')
@section('title')
    Blog Create - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
<div class="main-content" style="min-height: 842px;">
    <!-- Order -->
    <div class="order-div">
        <div class="row">
            @foreach($sub_types as $sub_type)
            <div class="col-xl-4 col-md-6">
               <a href="{{ route('order.form',$sub_type->id) }}">
                <div class="order-box">
                    <div class="order-img">
                        <img src="{{Storage::url($sub_type->icon)}}" alt="">  
                    </div>
                    <div class="order-text">
                      <h3>{{ $sub_type->name }}</h3>
                      <p>{{ $sub_type->details }}.</p>
                    </div>
                   </div>
               </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Order -->
</div>  

    
@endsection

@push('scripts')
 
@endpush
