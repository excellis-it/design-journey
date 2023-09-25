
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
                            <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">Check out some of the latest creations we did for our customers</p>
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
                        <li class="active" data-filter="*"><span>All</span></li>
                        <li data-filter=".socialdesign"><span>SOCIAL MEDIA DESIGN</span></li>
                        <li data-filter=".displayadd"><span>DISPLAY ADS</span></li>
                        <li data-filter=".wbsite"><span>WEBSITES</span></li>
                        <li data-filter=".logos"><span>LOGOS</span></li>
                        <li data-filter=".illutrations"><span>ILLUSTRATIONS</span></li>                        
                        <li data-filter=".print"><span>PRINT</span></li>
                        <li data-filter=".infographics"><span>INFOGRAPHICS</span></li>
                        <li data-filter=".icons"><span>ICONS</span></li>
                        <li data-filter=".gifts"><span>GIFS</span></li>
                        <li data-filter=".brandguides"><span>BRAND GUIDES</span></li>
                        <li data-filter=".presentations"><span>PRESENTATIONS</span></li>
                        <li data-filter=".motiongraphics"><span>MOTION GRAPHICS</span></li>
                        <li data-filter=".landingpages"><span>LANDING PAGES</span></li>
                        <li data-filter=".stationary"><span>STATIONARY SETS</span></li>
                    </ul>
                </div>


                {{-- <div class="filters-content">
                    <div class="row justify-content-center grid">
                        <!-- single - start -->
                        <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all socialdesign">
                            <div class="feature-section-content text-center">
                                <a href="">
                                    <figure>
                                        <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <!-- single - end -->
                        <!-- single - start -->
                        <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all socialdesign">
                            <div class="feature-section-content text-center">
                                <a href="">
                                    <figure>
                                        <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <!-- single - end -->
                        <!-- single - start -->
                        <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all displayadd">
                            <div class="feature-section-content text-center">
                                <a href="">
                                    <figure>
                                        <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all displayadd">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all wbsite">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all logos">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all logos">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all illutrations">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all illutrations">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all print">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all print">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all infographics">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all infographics">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all icons">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all icons">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all gifts">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all gifts">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all brandguides">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all brandguides">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all presentations">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all presentations">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all motiongraphics">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all motiongraphics">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all landingpages">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                    <!-- single - end -->
                    <!-- single - start -->
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 all landingpages">
                        <div class="feature-section-content text-center">
                            <a href="">
                                <figure>
                                    <img src="{{ asset('frontend_assets/assets/images/blog/blog-single-thumbnail-2.jpg')}}" alt="blog">                                    
                                </figure>
                            </a>
                        </div>
                    </div>
                                           


                </div> --}}
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

    @include('frontend.includes.get-in-touch')
    @endsection

    @push('scripts')
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js" id=""></script>
    <script>
        $('.filters ul li').click(function(){
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
    @endpush



