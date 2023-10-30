@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
Help Center
@endsection
@push('styles')
@endpush

@section('content')

<!-- header - start -->
<div class="header">
    <div class="header-wrapper">
        <div class="container container-help">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="header-content t-center">
                        <h1 class="m-horz-auto heading-width-res-full heading-width-83"><span class="c-red">Design Journey</span> Help Center</h1>
                        <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem repellendus quidem voluptate nostrum ad doloribus quas delectus quaerat obcaecati, a maiores ullam! Dolore commodi quam inventore dolorem, reiciendis autem sunt?</p>
                        <!-- <div class="col-lg-12 wow">
                            <div class="button-group button-group-center">
                                <a href="#" class="button button-red">
                                    <span>See How It Works</span>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header - end -->

<section class="help-sec">
    <div class="container">
        <div class="help-sec-wrap">
            <div class="row">
                <div class="col-lg-4">
                    <div class="help-list">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            @php
                            $uniqueNames = $help_centers->unique('name');
                            @endphp
                            
                            @foreach($uniqueNames as $uniqueName)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#{{ Str::slug($uniqueName->name) }}" aria-expanded="false" aria-controls="{{ Str::slug($uniqueName->name) }}">
                                        {{ $uniqueName->name }}
                                    </button>
                                </h2>
                                <div id="{{ Str::slug($uniqueName->name) }}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            @foreach($help_centers->where('name', $uniqueName->name) as $help_center)
                                            <li><a  class="help-center" data-help-center-id="{{ $help_center->id }}">{{ $help_center->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    @include('frontend.help-center-details');
                    {{-- <div class="get-start">
                        <div class="most-vs">
                            <h2 class="c-dark lt-60">Getting Started</h2>
                            <p>Learn everything you need to know about Design Journey unlimited design service.</p>
                        </div>
                        <!-- <div class="heading text-center">
                            <h1 class="lt-80 t-center m-horz-auto c-dark heading-width-res-full">Getting Started</h1> 
                        <p class="paragraph-big m-horz-auto heading-width-res-full">Learn everything you need to know about Design Journey unlimited design service.</p>-->
                    </div>
                    <hr>
                    <div class="most-vs">
                        <p>Ready to get started with Design Journey unlimited design service? Learn about our scope of services, how to sign up, submit and manage your requests.</p>
                    </div>
                    <div class="most-vs">
                        <h2 class="c-dark lt-60">Most visited:</h2>
                        <ul>
                            <li><a href="">Who Owns the Creative Rights?</a></li>
                            <li><a href="">Daily Output & Delivery Time</a></li>
                            <li><a href="">Find Your Invoices</a></li>
                            <li><a href="">Scope Of Design Service</a></li>
                            <li><a href="">How Does Design Journey Work?</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection

@push('scripts')
<script>

        $('.help-center').click(function() {
        var helpCenterId = this.getAttribute('data-help-center-id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{route("help-centers.get-details")}}',
            data: {
                'helpCenterId': helpCenterId
            },
            success: function(resp) {
                if (resp.status == true) {
                    $('#help-center-title').html(resp.data.title);
                    $('#help-center-description').html(resp.data.description);
                    $('#help-center-modal').modal('show');
                }
            }
        });
    });
</script>

@endpush