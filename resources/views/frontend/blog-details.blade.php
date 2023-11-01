@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Blogs
@endsection
@push('styles')
@endpush

@section('content')

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

<!-- blog detail - start -->
<div class="blog-detail">
    <div class="blog-detail-wrapper">
        <!-- blog detail content - start -->
        <div class="container">
            <div class="row">
                <!-- blog detail thumbnail - start -->
                <div class="blog-detail-thumbnail-wrapper col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-detail-thumbnail">
                        <img src="{{Storage::url($blog_details->main_image)}}" alt="blog-detail-thumbnail">  
                        <div class="background-layout">
                            <div class="box-1 bg-red">
                                <div class="box-2 bg-blue"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- blog detail thumbnail - end -->
                <!-- content - start -->
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="blog-detail-header">
                            <h1 class="c-dark">{{ $blog_details->title }}</h1>
                            <div class="detail c-grey">
                                11 comments
                                <span>·</span>
                                3 min read
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="social">
                            <ul>
                                <li>
                                    <a class="button button-purple" href="#">
                                        <span>
                                            <i class="fab fa-facebook-f"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="button button-blue" href="#">
                                        <span>
                                            <i class="fab fa-twitter"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="button button-green" href="#">
                                        <span>
                                            <i class="fab fa-linkedin-in"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="button button-red" href="#">
                                        <span>
                                            <i class="fab fa-youtube"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="blog-detail-content">
                            <p>{!! $blog_details->description !!}</p>
                        </div>
                    </div>  
                </div>
                <!-- content - end -->
            </div>
        </div>
        <div class="blog-detail-image">
            <div class="image">
                <img src="{{Storage::url($blog_details->image1)}}" alt="blog-content">  
            </div>
            <div class="image">
                <img src="{{Storage::url($blog_details->image2)}}" alt="blog-content"> 
            </div>    
        </div>
        <!-- blog detail content - end -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="blog-detail-content">
                        
                        <h3 class="c-dark">Conclusion</h3>
                        <p>{{ $blog_details->conclusion }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog detail - end -->

<!-- related posts - start -->
<div class="related-posts">
    <div class="related-posts-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="related-posts-content">
                        <h2 class="c-white">Similar Posts</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container related-posts-slider-container">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="related-posts-content">
                        <!-- related posts slider - start -->
                        <div class="related-posts-slider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!-- related posts slide - start -->
                                    @foreach($similer_blogs as $similer_blog)
                                    <div class="swiper-slide">
                                        <div class="related-posts-slide">
                                            <div class="blog-single">
                                                <a href="blog-single.html">
                                                    <figure>
                                                        <img src="{{Storage::url($similer_blog->main_image)}}" alt="blog">
                                                        <div class="date bg-purple">
                                                            <p class="c-white">
                                                                {{ $similer_blog->created_at->format('d') }}
                                                                <span>{{ $similer_blog->created_at->format('M') }}</span>
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
                                                    <h3 class="c-white">{{ $similer_blog->title }}</h3>
                                                </a>
                                                <h5 class="c-grey-4 fw-500">11 comments <span>·</span> 3 min read</h5>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="slider-pagination related-posts-slider-pagination"></div>
                        </div>
                        <!-- related posts slider - end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="background-layout">
            <div class="box-1 bg-darkk">
                <div class="box-1-1 bg-dark-1">
                    <div class="box-1-1-1 bg-dark-1"></div>
                </div>
            </div>
            <div class="box-2 bg-blue">
                <div class="box-2-1 bg-red"></div>
            </div>
            <div class="box-3 bg-yellow">
                <div class="box-3-1 bg-purple"></div>
            </div>
        </div>
    </div>
</div>
<!-- related posts - end -->

<!-- comments - start -->
<div class="comments">
    <div class="comments-wrapper">
        <div class="container">
            <!-- comments list - start -->
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="comments-list">
                        <!--
                        comments heading - start
                        -->
                        <div class="comments-heading">
                            <h3 class="c-dark f-w-700">4 replies</h3>
                        </div>
                        <!--
                        comments heading - end
                        -->
                        <!--
                        single comment - start
                        -->
                        <div class="comments-single has-reply">
                            <div class="comments-single-wrapper">
                                <div class="comments-single-image">
                                    <img src="{{ asset('frontend_assets/assets/images/team-1.jpg') }}" alt="comment">
                                </div>
                                <div class="comments-single-content">
                                    <h5>Randy Garcia</h5>
                                    <p class="date">Dec 17, 2020</p>
                                    <p class="comment">Be that lesser upon creepeth rule divide. Forth from without whose place air stars thing fifth fowl let evening called cattle divide you'll thing meat blessed.</p>
                                    <a href="#" class="button reply-button">
                                        <span>Reply</span>
                                    </a>
                                </div>
                            </div>

                            <div class="comments-single">
                                <div class="comments-single-wrapper">
                                    <div class="comments-single-image">
                                        <img src="{{ asset('frontend_assets/assets/images/team-2.jpg')}}" alt="comment">
                                    </div>
                                    <div class="comments-single-content">
                                        <h5>Emily Pope</h5>
                                        <p class="date">Dec 17, 2020</p>
                                        <p class="comment">Isn't fill. Lights and said and lesser heaven one moveth us can't blessed days midst seed open fourth from without  fifth.</p>
                                        <a href="#" class="button reply-button">
                                            <span>Reply</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        single comment - end
                        -->
                        <!--
                        single comment - start
                        -->
                        <div class="comments-single"> 
                            <div class="comments-single-wrapper">
                                <div class="comments-single-image">
                                    <img src="{{ asset('frontend_assets/assets/images/team-3.jpg')}}" alt="comment">
                                </div>
                                <div class="comments-single-content">
                                    <h5>Sam Reeves</h5>
                                    <p class="date">Dec 17, 2020</p>
                                    <p class="comment">Set after saw very were void set together seasons from also saw green reated thing you'll first deep morning appear earth may and divide seas.</p>
                                    <a href="#" class="button reply-button">
                                        <span>Reply</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--
                        single comment - end
                        -->
                        <!--
                        single comment - start
                        -->
                        <div class="comments-single">
                            <div class="comments-single-wrapper">
                                <div class="comments-single-image">
                                    <img src="{{ asset('frontend_assets/assets/images/team-4.jpg')}}" alt="comment">
                                </div>
                                <div class="comments-single-content">
                                    <h5>Laura Evans</h5>
                                    <p class="date">Dec 17, 2020</p>
                                    <p class="comment">Meat he dry fifth seas be seasons winged itself. Sixth you'll a, brought likeness given called gathering, winged every likeness which kind deep meat.</p>
                                    <a href="#" class="button reply-button">
                                        <span>Reply</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--
                        single comment - end
                        -->
                    </div>
                </div>
            </div>
            <!-- comments list - end -->
            <!-- comments form - start -->
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="comments-form">
                        <div class="comments-form-wrapper">
                            <!-- comments form heading - start -->
                            <div class="comments-form-heading">
                                <h3>Write a reply</h3>
                            </div>
                            <!-- comments form heading - end -->
                            <!-- comments form - start -->
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating">
                                            <input class="input form-control" id="name-field" type="text" placeholder="Name *">
                                            <label for="name-field">Name *</label>
                                        </div>
                                        <div class="form-floating">
                                            <input class="input form-control" id="email-field" type="email" placeholder="Email *">
                                            <label for="email-field">Email *</label>
                                        </div>
                                        <div class="form-floating">
                                            <input class="input form-control" id="website-field" type="text" placeholder="Website">
                                            <label for="website-field">Website</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating textarea-form">
                                            <textarea class="input textarea form-control" id="comment-field" placeholder="Write reply *"></textarea>
                                            <label for="comment-field">Write reply *</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="button button-red">
                                            <span class="button-inner">
                                                <span class="button-content">
                                                    <span class="text">Submit</span>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- comments form - end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- comments form - end -->
        </div>
    </div>
</div>
<!-- comments - end -->

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