@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Blogs
@endsection
@push('styles')
@endpush

@section('content')
 
 
 <!-- page header - start -->
 <div class="page-header">
    <div class="page-header-wrapper">
        <div class="container page-header-content">
            <div class="row align-items-lg-end">
                <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <h1 class="c-dark">Our Blog</h1>
                </div>
                <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <ul>
                        <li>
                            <a href="index.html" class="link-underline link-underline-1">
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <span>
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </li>
                        <li>
                            <a href="blog.html" class="link-underline link-underline-1">
                                <span>Blog</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="background-layout">
            <div class="box-1 bg-grey-5"></div>
            <div class="box-2 bg-yellow">
                <div class="box-3 bg-purple"></div>
            </div>
        </div>
    </div>
</div>
<!-- page header - end -->

<!-- blog section - start -->
<div class="blog-section blog-section-1">
    <div class="blog-section-wrapper">
        <div class="container">
            <!-- blog - start -->
            <div class="row blog-row gx-5">

                @foreach($blogs as $blog)
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-single">
                        <a href="{{ route('blog-details',encrypt($blog->id)) }}">
                            <figure>
                                <img src="{{ asset($blog->main_image) }}" alt="blog">
                                <div class="date bg-purple">
                                    <p class="c-white">
                                        {{ $blog->created_at->format('d') }}
                                        <span>{{ $blog->created_at->format('M') }}</span>
                                        
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="{{ route('blog-details',encrypt($blog->id)) }}">
                            <h3 class="c-dark">{{ $blog->title }}</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure>
                                <img src="assets/images/blog/blog-single-thumbnail-2.jpg" alt="blog">
                                <div class="date bg-blue">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Continuing Medical Education Activities Across the Globe.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure>
                                <img src="assets/images/blog/blog-single-thumbnail-3.jpg" alt="blog">
                                <div class="date bg-red">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Advanced Search Tags to Filter Based on Specialty and Disease.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure>
                                <img src="assets/images/blog/blog-single-thumbnail-1.jpg" alt="blog">
                                <div class="date bg-pink">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Take Command of Your Personal and Professional Development.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure>
                                <img src="assets/images/blog/blog-single-thumbnail-2.jpg" alt="blog">
                                <div class="date bg-yellow">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Continuing Medical Education Activities Across the Globe.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
               
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure>
                                <img src="assets/images/blog/blog-single-thumbnail-3.jpg" alt="blog">
                                <div class="date bg-green">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Advanced Search Tags to Filter Based on Specialty and Disease.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                
                <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure class="thumbnail-big">
                                <img src="assets/images/blog/blog-single-thumbnail-1.jpg" alt="blog">
                                <div class="date bg-purple">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Take Command of Your Personal and Professional Development.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                
                <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure class="thumbnail-big">
                                <img src="assets/images/blog/blog-single-thumbnail-2.jpg" alt="blog">
                                <div class="date bg-blue">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Introducting Advanced Search Tags to Filter Based on Specialty and Disease.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure>
                                <img src="assets/images/blog/blog-single-thumbnail-3.jpg" alt="blog">
                                <div class="date bg-purple">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Take Command of Your Personal and Professional Development.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure>
                                <img src="assets/images/blog/blog-single-thumbnail-1.jpg" alt="blog">
                                <div class="date bg-blue">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Continuing Medical Education Activities Across the Globe.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure>
                                <img src="assets/images/blog/blog-single-thumbnail-2.jpg" alt="blog">
                                <div class="date bg-red">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Advanced Search Tags to Filter Based on Specialty and Disease.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure>
                                <img src="assets/images/blog/blog-single-thumbnail-3.jpg" alt="blog">
                                <div class="date bg-pink">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Take Command of Your Personal and Professional Development.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
               
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure>
                                <img src="assets/images/blog/blog-single-thumbnail-1.jpg" alt="blog">
                                <div class="date bg-yellow">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Continuing Medical Education Activities Across the Globe.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div>
                
                <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-single">
                        <a href="blog-single.html">
                            <figure>
                                <img src="assets/images/blog/blog-single-thumbnail-2.jpg" alt="blog">
                                <div class="date bg-green">
                                    <p class="c-white">
                                        27 <span>Dec</span>
                                    </p>
                                </div>
                                <div class="hover">
                                    <div class="circle">
                                        <i class="fas fa-plus"></i>
                                    </div>
                                </div>
                            </figure>
                        </a>
                        <a href="blog-single.html">
                            <h3 class="c-dark">Advanced Search Tags to Filter Based on Specialty and Disease.</h3>
                        </a>
                        <h5 class="c-grey fw-500">11 comments <span>·</span> 3 min read</h5>
                    </div>
                </div> --}}
               
            </div>
            <!-- blog - end -->
            <!-- pagination - start -->
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-pagination">
                        {{ $blogs->links() }}
                        {{-- <ul>
                            <li class="active">
                                1
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            <!-- pagination - end -->
        </div>
    </div>
</div>
<!-- blog section - end -->

<!-- cta section - start -->
<div class="cta-section position-relative">
    <div class="cta-section-wrapper">
        <div class="container">
            <div class="row d-lg-flex align-items-lg-center">
                <!-- content - start -->
                <div class="col-lg-6 offset-lg-0 order-lg-1 col-md-8 offset-md-2 col-10 offset-1 order-2">
                    <div class="cta-section-content">
                        <h2 class="c-white">Serving Businesses of Every Size with Digital and Print Designs</h2>
                        <div class="button-group">
                            <a href="#" class="button button-red button-red-hover-white">
                                <span>Get Started</span>
                            </a>
                            <!-- <a href="#" class="button button-purple button-purple-hover-white">
                                <span>Learn More</span>
                            </a> -->
                        </div>
                    </div>
                </div>
                <!-- content - end -->
                <!-- image - start -->
                <div class="col-lg-6 offset-lg-0 order-lg-2 col-md-8 offset-md-2 col-10 offset-1 order-1">
                    <div class="cta-section-image">
                        <img src="assets/images/cta-phone.png" alt="phone">
                        <!-- <div class="box-1 bg-green-rgba-8">
                            <div class="box-2 bg-purple">
                                <div class="box-2-1 bg-dark-1"></div>
                            </div>
                            <div class="box-3 bg-dark-1"></div>
                        </div> -->
                        <div class="box-4 bg-red-rgba-8">
                            <div class="box-5 bg-dark-1">
                                <div class="box-6 bg-blue">
                                    <div class="box-7 bg-dark-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- image - end -->
            </div>
        </div>
    </div>
    <div class="background-layout">
        <div class="box-1 bg-darkk">
            <div class="box-1-1 bg-dark-1">
                <div class="box-1-1-1 bg-dark-1 wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
            </div>
            <div class="box-2 bg-green">
                <div class="box-2-1 bg-red wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
            </div>
            <div class="box-3 bg-yellow">
                <div class="box-3-1 bg-blue wow pulse" data-wow-delay="0.7s" data-wow-iteration="infinite"></div>
            </div>
        </div>
    </div>
</div>
<!-- cta section - end -->

@endsection

@push('scripts')

@endpush
