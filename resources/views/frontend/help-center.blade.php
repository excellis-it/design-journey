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
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Account & Subscription
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><a href="">Sign in to Your Account</a></li>
                                            <li><a href="">Manage Your Payment Method</a></li>
                                            <li><a href="">Update Your Billing Information</a></li>
                                            <li><a href="">Update Your Account Information</a></li>
                                            <li><a href="">Find Your Invoices</a></li>
                                            <li><a href="">How to Choose the Right Plan</a></li>
                                            <li><a href="">Edit Your Plan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Design Journey
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><a href="">Where Is Design Journey Based?</a></li>
                                            <li><a href="">Design Journey Production Schedule</a></li>
                                            <li><a href="">Who Is Design Journey For?</a></li>
                                            <li><a href="">Accepted Payment Methods & Currencies</a></li>
                                            <li><a href="">Terms & Conditions</a></li>
                                            <li><a href="">What Languages Do You Support?</a></li>
                                            <li><a href="">Who Owns the Creative Rights?</a></li>
                                            <li><a href="">How to Sign-up for Design Journey?</a></li>
                                            <li><a href="">Scope Of Design Service</a></li>
                                            <li><a href="">How Does Design Journey Work?</a></li>
                                            <li><a href="">How to Submit a Request</a></li>
                                            <li><a href="">Customer Satisfaction Period</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        Our Design Process
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><a href="">Daily Output & Delivery Time</a></li>
                                            <li><a href="">The Design Journey Web App</a></li>
                                            <li><a href="">Brand Profiles</a></li>
                                            <li><a href="">How to Communicate with Your Designer?</a></li>
                                            <li><a href="">Manage Your Requests</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Best Practices
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><a href="">How to Give Design Revisions</a></li>
                                            <li><a href="">How to Be Successful with Design Journey</a></li>
                                            <li><a href="">How to Create the Perfect Brief</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        Support & Others
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><a href="">Report a Bug</a></li>
                                            <li><a href="">Give Us Feedback</a></li>
                                            <li><a href="">Our Referral Program</a></li>
                                            <li><a href="">Our Affiliate Program</a></li>
                                            <li><a href="">Contact Us</a></li>
                                            <li><a href="">Leave Us a Review</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        Tips & Tricks
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><a href="">Where to Find Inspiration?</a></li>
                                            <li><a href="">How to Request Digital Ads</a></li>
                                            <li><a href="">How to Request a Brand Guide</a></li>
                                            <li><a href="">How to Request a Book Cover Design</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="get-start">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection