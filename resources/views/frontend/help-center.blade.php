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
                            <h1 class="m-horz-auto heading-width-res-full heading-width-83"><span class="c-red">Design
                                    Journey</span> Help Center</h1>
                            <p class="paragraph-big m-horz-auto heading-width-res-full heading-width-65">Lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Autem repellendus quidem voluptate nostrum ad
                                doloribus quas delectus quaerat obcaecati, a maiores ullam! Dolore commodi quam inventore
                                dolorem, reiciendis autem sunt?</p>
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
        
                                @foreach ($uniqueNames as $uniqueName)
                                    @php
                                        $slugName = Str::slug($uniqueName->name);
                                    @endphp
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#{{ $slugName }}" aria-expanded="false"
                                                aria-controls="{{ $slugName }}">
                                                {{ $uniqueName->name }}
                                            </button>
                                        </h2>
                                        <div id="{{ $slugName }}" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul class="nav nav-pills flex-column nav-pills border-end border-3 me-3 align-items-end"
                                                    id="pills-tab" role="tablist">
                                                    @foreach ($help_centers->where('name', $uniqueName->name) as $help_center)
                                                        <li class="nav-item" role="presentation" style="text-align: left;
                                                        width: 100%;">
                                                            @php
                                                                $helpCenterId = $help_center->id;
                                                            @endphp
                                                            <button
                                                                class="nav-link fw-semibold position-relative help-center"
                                                                id="{{ 'tab-' . $helpCenterId }}"
                                                                data-bs-toggle="pill"
                                                                data-bs-target="#{{ 'content-' . $helpCenterId }}"
                                                                type="button" role="tab"
                                                                aria-controls="{{ 'content-' . $helpCenterId }}" aria-selected="true"
                                                                data-help-center-id="{{ $helpCenterId }}" style="font-size: 17px; text-align: left; padding: 0; color:#000;">{{ $help_center->title }}</button>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8" id="help-center-detils">
                        <div class="tab-content border rounded-3 border-primary p-3 text-danger w-100"
                            id="pills-tabContent">
                            @foreach ($help_centers as $help_center)
                                @php
                                    $helpCenterId = $help_center->id;
                                @endphp
                                <div class="tab-pane fade{{ $loop->first ? ' show active' : '' }}" id="{{ 'content-' . $helpCenterId }}" role="tabpanel"
                                    aria-labelledby="{{ 'tab-' . $helpCenterId }}">
                                    <div class="get-start">
                                        <div class="most-vs">
                                            <h2 class="c-dark lt-60">{{ $help_center->title }}</h2>
                                            <p>{!! $help_center->details !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
                url: '{{ route('help-centers.get-details') }}',
                data: {
                    'helpCenterId': helpCenterId
                },
                success: function(resp) {

                    $('#help-center-detils').html(resp.view);


                }
            });
        });
    </script>
@endpush
