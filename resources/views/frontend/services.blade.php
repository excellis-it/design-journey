@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Blogs
@endsection
@push('styles')
@endpush

@section('content')
<section class="serv-sec">
 <div class="container">
  <div class="serv-sec-wrap">
    <div class="heading">
       <h1 class="lt-80 t-center m-horz-auto c-dark heading-width-res-full heading-width-60">
          Apps, websites, logos & more.
        </h1>
    </div> 
    <div class="serv-list-1">
      <div class="row">
        @foreach($categories as $category)
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">{{ $category->name }}</h4>   
          </div>  
        </div> 
        @endforeach 
        {{-- <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Websites</h4>   
          </div>  
        </div> 
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Trade show banners</h4>   
          </div>  
        </div> 
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Mobile apps</h4>   
          </div>  
        </div>  
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Direct mail</h4>   
          </div>  
        </div> 
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Email graphics</h4>   
          </div>  
        </div> 
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Slide decks</h4>   
          </div>  
        </div>  
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Websites</h4>   
          </div>  
        </div> 
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Trade show banners</h4>   
          </div>  
        </div> 
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Mobile apps</h4>   
          </div>  
        </div>  
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Direct mail</h4>   
          </div>  
        </div> 
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Email graphics</h4>   
          </div>  
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Slide decks</h4>   
          </div>  
        </div>  
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Websites</h4>   
          </div>  
        </div> 
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Trade show banners</h4>   
          </div>  
        </div> 
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Mobile apps</h4>   
          </div>  
        </div>  
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Direct mail</h4>   
          </div>  
        </div> 
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Email graphics</h4>   
          </div>  
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Slide decks</h4>   
          </div>  
        </div>  
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Websites</h4>   
          </div>  
        </div> 
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Trade show banners</h4>   
          </div>  
        </div> 
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Mobile apps</h4>   
          </div>  
        </div>  
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Direct mail</h4>   
          </div>  
        </div> 
        <div class="col-lg-4 col-md-6">
          <div class="serv-list-head">
           <h4 class="c-dark">Email graphics</h4>   
          </div>  
        </div> --}}
      </div>   
    </div>
  </div>   
 </div>
</section>

 
 
 @endsection