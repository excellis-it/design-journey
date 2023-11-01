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
            @foreach($types as $type)
            <div class="col-xl-4 col-md-6">
               <a href="{{ route('order.single',$type->id) }}">
                <div class="order-box">
                    <div class="order-img">
                        <img src="{{Storage::url($type->logo)}}" alt="">  
                    </div>
                    <div class="order-text">
                      <h3>{{ $type->name }}</h3>
                      <p>{{ $type->details }}.</p>
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
