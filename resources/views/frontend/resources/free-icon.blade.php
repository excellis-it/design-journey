@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Free Icon
@endsection
@push('styles')
@endpush

@section('content')

 <!-- header - start -->
 <div class="header">
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 0 offset-1">
                    <div class="header-content t-center">
                        <h1 class="m-horz-auto heading-width-res-full heading-width-83"><span class="c-red">2,500+
                                royalty-free</span> icon
                            to power up your designs</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header - end -->

<!-- Our Works Sec -->
<div class="our_works_sec">
    <div class="feature-section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter_sec">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="search_filter">
                                    <input type="text" placeholder="Search" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="filter_check">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            All Categories
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            @foreach ($icon_categories as $value)
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="{{ $value->id }}"
                                                        name="category"
                                                        class="category_id" />{{ $value->category_name }}</label>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="filter_check">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                           All Styles
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Outline" class="style_type"
                                                        name="style" />Outline</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="flatline" class="style_type"
                                                        name="style" />flatline</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Two Color" name="style"
                                                        class="style_type" />Two
                                                    Color</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Isometric" class="style_type"
                                                        name="style" />Isometric</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Monochromatic" class="style_type"
                                                        name="style" />Monochromatic</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icon-filter">
                @include('frontend.resources.icon-filter')

            </div>

        </div>

        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="button-group button-group-center">
                        <a href="#" class="button button-red">
                            <span>View More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>


@endsection

@push('scripts')
    <script>
        // Add an event listener for the filter and search input fields
        $('.search_filter input, .style_type, .category_id').on('change keyup', function() {
            // Retrieve selected checkboxes
            var category = [];
            var style = [];
            $('.style_type:checked').each(function() {
                style.push($(this).val());
            });
            $('input[name="category"]:checked').each(function() {
                category.push($(this).val());
            });

            var search = $('.search_filter input').val();

            // Make an AJAX request to the Laravel route
            $.ajax({
                url: "{{ route('icon.filter') }}",
                type: 'GET',
                data: {
                    category: category,
                    style: style,
                    search: search,
                },
                success: function(data) {
                    // Update the icon container with the filtered results
                    $('.icon-filter').html(data);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
    </script>
@endpush
