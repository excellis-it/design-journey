@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
Career Details
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
                        <h1 class="m-horz-auto heading-width-res-full heading-width-83"><span class="c-red">{{ $career_details->career_name }}</span></h1>
                        <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">{!! $career_details->details !!}</p>
                        <div class="opening-box mb-5">
                            <div class="remote d-flex align-items-center justify-content-center">
                                <a href="">
                                    <h4><span><i class="fas fa-map-marker-alt"></i></span>{{ $career_details->location }}</h4>
                                </a>
                                <a href="">
                                    <h4><span><i class="fas fa-wifi"></i></span>{{ $career_details->work_type }}</h4>
                                </a>
                                <a href="">
                                    <h4><span><i class="fas fa-building"></i></span>{{ $career_details->work_type }}</h4>
                                </a>
                                
                            </div>
                        </div>
                        <div class="col-lg-12 wow">
                            <div class="button-group button-group-center">
                                <a href="#" class="button button-red">
                                    <span>View Openings</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header - end -->
<section class="job-openings">
    <div class="container">
        <div class="job-openings-wrap">
            <div class="job-openings-breadcrumb">
                <ul class="breadcrumb">
                    <li><a href="#">Job Openings</a></li>
                    <li><a href="#">Account Executive (Remote)</a></li>
                </ul>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="abt-job-wrap">
                        <div class="abt-job">
                            <h3>About ManyPixels</h3>
                            <p>ManyPixels provides graphic design services to SMEs, agencies, and marketing teams all around the world. For a monthly fee, our customers get direct access to our team of 50+ talented designers for all their design needs: digital graphics, web design, illustrations, branding, etc.</p>
                            <p>Our team is fully distributed across Europe and Asia, while most customers are in the US.</p>
                            <p>We have been around for 4+ years and are still growing as we solve a very common and painful problem: finding a talented, affordable and reliable freelance designer is hard.</p>

                            <h3>About the role</h3>
                            <p>We are looking for our new Account Executive to join the team.</p>
                            <p>You will be an essential part of the ManyPixels team and work closely with the CEO, operations manager, and marketing manager.</p>
                            <p>You will be in charge of the entire sales cycle and you will be responsible for (1) nurturing and closing inbound leads, (2) managing and supporting existing customers and (3) hunting for new opportunities.</p>
                            <p>You will act as service/product expert and goto contact for both prospective and existing customers.</p>
                            <p>This is a varied and challenging position that is best suited for a self-driven individual with a do-it mentality, things will move fast, and it will be up to you to make it happen. This is an opportunity to buy into the vision of a young company and have a significant impact on its growth.</p>

                            <h3>What you will work on</h3>
                            <ul>
                                <li>Managing the entire sales cycle from finding leads to closing deals</li>
                                <li>Developing new sales opportunities and turn them into paying customers</li>
                                <li>Nurturing and closing incoming leads</li>
                                <li>Maintain a growing and healthy sales pipeline and Manage CRM</li>
                                <li>Conducting demo calls to prospective customers</li>
                                <li>Staying in frequent contact and providing after-sales support with existing customers to ensure satisfaction/retention</li>
                                <li>Developing both outbound and inbound sales strategies</li>
                                <li>Handling complaints and negotiations</li>
                            </ul>
                            <h3>Our ideal candidate</h3>
                            <ul>
                                <li>You have 2+ years of proven experience as an Account Executive or in another sales role</li>
                                <li>You have excellent communication and presentation skills</li>
                                <li>You are a people person with great empathy and have the ability to build relationships</li>
                                <li>You are familiar with the usual sales and remote team tools: CRM (Hubspot), Stripe, Google Meet, Slack, Notion, etc.</li>
                                <li>You are comfortable in a fast-paced environment</li>
                                <li>You are energetic and self-driven</li>
                            </ul>
                            <h3>Benefits</h3>
                            <ul>
                                <li>Full-time remote job</li>
                                <li>Join a growing bootstrapped startup with a lot of potential</li>
                                <li>Autonomy to implement ideas and have a significant impact</li>
                                <li>20 days of paid time off per year</li>
                                <li>Ability to earn uncapped bonuses based on success</li>
                            </ul>
                            <h3>Location</h3>
                            <ul>
                                <li>Remote</li>
                                <li>Must be able to work (at least partially) US EST Tine.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="apply-btn">
                        <a href="{{ route('career-form') }}" class="btn">Apply To Position</a>
                    </div>
                    <div class="apply-btn btn-blue">
                        <a href="{{ route('career-form') }}" class="btn">Use My Indeed Resume</a>
                    </div>
                    <div class="apply-btn btn-blue">
                        <a href="{{ route('career-form') }}" class="btn">Apply Using LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
</section>



@endsection