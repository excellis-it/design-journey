
@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Our work
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
                        <div class="header-content t-center">
                            <h1 class="m-horz-auto heading-width-res-full heading-width-83">Pricing</h1>
                            <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">All-inclusive
                                plans. No contract. Cancel anytime.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header - end -->

    <!-- feature section - start -->
    <div class="feature-section" id="about">
        <div class="feature-section-wrapper pt-0">
            <div class="container">
                <div class="Pricing_sec">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active duration" id="monthly" data-bs-toggle="tab" data-bs-target="#monthly"
                                type="button" role="tab" aria-controls="monthly" aria-selected="true"  >MONTHLY
                                </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link duration" id="quarterly" data-bs-toggle="tab" data-bs-target="#quarterly"
                                type="button" role="tab" aria-controls="quarterly" aria-selected="false" >QUARTERLY</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link duration" id="yearly" data-bs-toggle="tab" data-bs-target="#yearly"
                                type="button" role="tab" aria-controls="yearly" aria-selected="false" >YEARLY</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                            <!-- pricing row - start -->
                            <div id="plan-filter">@include('frontend.pricing-filter')</div>
                            <!-- pricing row - end -->
                        </div>
                        {{-- <div class="tab-pane fade" id="quarterly" role="tabpanel" aria-labelledby="quarterly-tab">...</div>
                        <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">...</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature section - end -->
    
    @endsection

    @push('scripts')
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js" id=""></script>
    
    <script>
        $('.filters ul li').click(function () {
            $('.filters ul li').removeClass('active');
            $(this).addClass('active');

            var data = $(this).attr('data-filter');
            $grid.isotope({
                filter: data
            })
        });

        var $grid = $(".grid").isotope({
            itemSelector: ".all",
            percentPosition: true,
            masonry: {
                columnWidth: ".all"
            }
        });
    </script>

    <script>
        $(document).ready(function () {
            $('.duration').click(function () {
            //get duration value
            var duration = $(this).attr('id');
            $.ajax({
                url: "{{ route('pricing.filter') }}",
                method: 'post',
                data: {
                    duration: duration
                },
                headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                success: function (data) {
                    $('#plan-filter').html(data.view);
                }
            });     
            });
        });
        </script>
@endpush