@extends('user.layouts.master')
@section('title')
    Request - {{ env('APP_NAME') }} user
@endsection
@push('styles')
@endpush

@section('content')
    <div class="main-content" style="min-height: 842px;">
        <!-- form -->
        <div class="">

        </div>
        <div class="order-form">
            <section class="create-brand">
                <div class="container-fluid">
                    <form action="{{ route('update.brand-profile') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="create-brand-wrap">
                            <div class="create-brand-head">
                                <h2>Brand Description</h2>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="{{ $brand_profile->id }}">
                        <div class="create-brand-wrap">
                            <div class="create-brand-head">
                                <h2>Colors</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="brand-up">
                                        <div class="form-group">
                                            <label>
                                                <div class="up-file">
                                                    <div class="container-color-div">
                                                        <div class="container-color">
                                                            <input type="color" name="color" id="color-picker" value="{{ $brand_profile->brand_colour }}" />
                                                            <span id="value"></span>
                                                        </div>
                                                    </div>
                                                    <div class="btn-up">
                                                        <span class="up-icon"></span>
                                                        Add a color
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="create-brand-wrap">
                            <div class="create-brand-head">
                                <h2>Logo</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <a href="">
                                        <div class="brand-up">
                                            <div class="form-group">
                                                <label>
                                                    <div class="up-file">
                                                        <input type="file" name="logo_file" hidden="">
                                                        <div class="btn-up-file"><span class="up-file-icon"><i
                                                                    class="ph ph-file-plus"></i></span></div>
                                                        <div class="btn-up">
                                                            <span class="up-icon"><i
                                                                    class="ph ph-arrow-fat-line-up"></i></span> Upload a
                                                            file
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <div class="up-file border-0" > 
                                            @if($brand_profile->brand_logo != '')                                         
                                            <a href="{{ Storage::url($brand_profile->brand_logo) }}" target="_blank" class="btn btn-primary">View file</a>
                                            @else
                                            <p>No file uploaded</p>
                                            @endif
                                        </div>                                
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <div class="create-brand-wrap">
                            <div class="create-brand-head">
                                <h2>Brand Guide</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="brand-up">
                                        <div class="form-group">
                                            <label>
                                                <div class="up-file">
                                                    <input type="file" name="brand_guide_file" hidden="">
                                                    <div class="btn-up-file"><span class="up-file-icon"><i
                                                                class="ph ph-file-plus"></i></span></div>
                                                    <div class="btn-up">
                                                        <span class="up-icon"><i class="ph ph-arrow-fat-line-up"></i></span>
                                                        Upload a
                                                        file
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <div class="up-file border-0" > 
                                            @if($brand_profile->brand_guide != '')                                         
                                            <a href="{{ Storage::url($brand_profile->brand_guide) }}" target="_blank" class="btn btn-primary">View file</a>
                                            @else
                                            <p>No file uploaded</p>
                                            @endif
                                        </div>                                
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <div class="create-brand-wrap">
                            <div class="create-brand-head">
                                <h2>Fonts</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="brand-up">
                                        <div class="form-group">
                                            <label>
                                                <div class="up-file">
                                                    <input type="file" name="font_file" hidden="">
                                                    <div class="btn-up-file"><span class="up-file-icon"><i
                                                                class="ph ph-file-plus"></i></span></div>
                                                    <div class="btn-up">
                                                        <span class="up-icon"><i class="ph ph-arrow-fat-line-up"></i></span>
                                                        Upload new
                                                        font
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <div class="up-file border-0" > 
                                            @if($brand_profile->font != '')                                         
                                            <a href="{{ Storage::url($brand_profile->font) }}" target="_blank" class="btn btn-primary">View file</a>
                                            @else
                                            <p>No file uploaded</p>
                                            @endif
                                        </div>                                
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <div class="create-brand-wrap">
                            <div class="create-brand-head">
                                <h2>Extra assets</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="extra-para">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nostrum
                                            corrupti
                                            maiores nisi quaerat omnis, adipisci, officiis quas labore optio beatae a
                                            ratione
                                            voluptas fugiat excepturi fugit accusamus nam quidem!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="brand-up">
                                        <div class="form-group">
                                            <label>
                                                <div class="up-file">
                                                    <input type="file" name="extra_assets_file" hidden="">
                                                    <div class="btn-up-file"><span class="up-file-icon"><i
                                                                class="ph ph-file-plus"></i></span></div>
                                                    <div class="btn-up">
                                                        <span class="up-icon"><i class="ph ph-arrow-fat-line-up"></i></span>
                                                        Upload Extra Assets
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <div class="up-file border-0" > 
                                            @if($brand_profile->extra_asset != '')                                         
                                            <a href="{{ Storage::url($brand_profile->extra_asset) }}" target="_blank" class="btn btn-primary">View file</a>
                                            @else
                                            <p>No file uploaded</p>
                                            @endif
                                        </div>                                
                                    </div>     
                                </div>
                            </div>
                        </div>
                        <div class="Up-file">
                            <button class="btn" type="submit">Upload File</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    @endsection


    @push('scripts')
    @endpush
