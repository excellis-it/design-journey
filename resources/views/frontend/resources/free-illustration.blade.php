@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
   Free Illustration 
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
                        <h1 class="m-horz-auto heading-width-res-full heading-width-83"><span class="c-red">2,500+
                                royalty-free</span> illustrations
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
                <div class="col-lg-12" data-wow-delay="0.2s">
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
                                            Categories
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Vejle"
                                                        name="city" />Seasonal</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Vejle"
                                                        name="city" />Marketing</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Vejle"
                                                        name="city" />Business coach</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Vejle"
                                                        name="city" />Holidays</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Vejle"
                                                        name="city" />Hygiene and health</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Vejle"
                                                        name="city" />Hygiene and health</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="filter_check">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Styles
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Vejle"
                                                        name="city" />Outline</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Vejle"
                                                        name="city" />flatline</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Vejle"
                                                        name="city" />Two Color</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Vejle"
                                                        name="city" />Isometric</label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="Vejle"
                                                        name="city" />Monochromatic</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/sent-messages-4.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">Click Here</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/new-message-e6.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">Sent messages</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/clean-inbox-5.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">New Message</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/full-inbox-0.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">Empty Inbox</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/sent-messages-4.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">Click Here</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/new-message-e6.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">Sent messages</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/clean-inbox-5.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">New Message</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/full-inbox-0.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">Empty Inbox</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/sent-messages-4.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">Click Here</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/new-message-e6.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">Sent messages</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/clean-inbox-5.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">New Message</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/full-inbox-0.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">Empty Inbox</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/sent-messages-4.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">Click Here</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/new-message-e6.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">Sent messages</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/clean-inbox-5.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">New Message</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
               
                
                <div class="col-lg-3">
                    <div class="fre_icons">
                        <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span><img src="{{ asset('frontend_assets/assets/images/free_ill/full-inbox-0.png')}}" alt="" /></span>
                            <a href="" class="click-btn text-center">Empty Inbox</a>
                            <div class="download_icon">
                               <a href=""> <img src="{{ asset('frontend_assets/assets/images/download.png')}}" alt="" /><a>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>





        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="button-group button-group-center">
                        <a href="#" class="button button-red">
                            <span>View More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection