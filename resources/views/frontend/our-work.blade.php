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
                            <h1 class="m-horz-auto heading-width-res-full heading-width-83">Our Work</h1>
                            <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">Check out some of
                                the latest creations we did for our customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header - end -->

    <!-- feature section - start -->
    <div class="feature-section" id="about">
        <div class="">
            <!-- content - start -->
            <div class="container">
                <div class="filters">
                    <ul>
                        <li class="active category" data-filter="*" data-id="all"><span>All</span></li>
                        @foreach ($categories as $category)
                            <li data-filter=".{{ $category->slug }}" class="category" data-id="{{ $category->slug }}">
                                <span>{{ $category->name }}</span></li>
                        @endforeach
                    </ul>
                </div>


                <div class="filters-content">
                    <div id="category_filter">@include('frontend.our-work-filter')</div>
                    <div class="row">
                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="button-group button-group-center">
                                <a href="#" class="button button-red">
                                    <span>VIEW MORE</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content - end -->
            </div>
        </div>
        <!-- feature section - end -->

        
    @endsection

    @push('scripts')
        <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js" id=""></script>

        <script>
            $('.filters ul li').click(function() {
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
            $(document).ready(function() {
                $(".category").click(function() {
                    var category = $(this).data('id');

                    $.ajax({
                        url: "{{ route('our-work.filter') }}",
                        type: "POST",
                        data: {
                            category: category
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },

                        success: function(data) {
                            $('#category_filter').html(data.view);
                        }
                    });
                });
            });
        </script>
    @endpush
