@extends('user.layouts.master')
@section('title')
Request - {{ env('APP_NAME') }} user
@endsection
@push('styles')
@endpush

@section('content')

<div class="main-content" style="min-height: 842px;">
    <!-- form -->
    <div class="code">
     {{-- <h3>#123456789</h3>  --}}
     <h4>{{ $user_request->status }}</h4>     
    </div>
    <div class="order-form">
        <div class="brief-tab-div">
            <div class="brief-tab-wrap">
                <div class="brief-tab">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Brief</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Files</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Messages</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <div class="brief-msg">
                                <div class="table-responsive">
                                    <table class="table rowNumbers">
                                        <thead>
                                            <tr>
                                                <th scope="col">Designers:</th>
                                                <th scope="col">Type:</th>
                                                <th scope="col">Product:</th>
                                                <th scope="col">Last Upadate:</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="img-td"><img src="{{ asset('user_assets/img/profile.png')}}" alt=""> XYZ</td>
                                                <td>{{ $user_request->Type->name }}</td>
                                                <td>{{ $user_request->SubType->name }}</td>
                                                <td>{{ $user_request->created_at->format('F j, g:i A') }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="qs-list">
                                    <div class="qs-head">
                                        <h2>1. FIRST, NAME YOUR REQUEST</h2>
                                        <h3>{{ $user_request->request_name }}</h3>
                                    </div>
                                    <div class="qs-head">
                                        <h2>2. SELECT YOUR BRAND PROFILE</h2>
                                        <h3>{{ $user_request->brand_name }}</h3>
                                    </div>
                                    <div class="qs-head">
                                        <h2>3. WHICH TYPE OF DESIGN YOU NEED?</h2>
                                        <h3>{{ $user_request->design_type }}</h3>
                                    </div>
                                    <div class="qs-head">
                                        <h2>4. HOW MANY PAGES/ SLIDESDO YOU NEED?</h2>
                                        <h3>{{ $user_request->pages_number }} pages</h3>
                                    </div>
                                    <div class="qs-head">
                                        <h2>5. WHAT SIZE AND FORMAT DO YOU NEED?</h2>
                                        <h3>{{ $user_request->size_format }}</h3>
                                    </div>
                                    <div class="qs-head">
                                        <h2>6. WHAT COPY SHOULD WE INCLUDE IN THE PRESENTATION?</h2>
                                        <h3>{{ $user_request->copy_presentation }}</h3>
                                    </div>
                                    <div class="qs-head">
                                        <h2>7. UPLOAD ANY DESIGN, ASSETS OR INSPITRATION WE SHOULD FOLLOW</h2>
                                        <h3>
                                            @if($user_request->demo_design_file != '')
                                                <a href="{{ asset($user_request->demo_design_file) }}" target="_blank">View</a>
                                            @endif
                                        </h3>
                                    </div>
                                    <div class="qs-head">
                                        <h2>8. DOES YOUR DESIGN PROJECT REQUIRE CUSTOM ILLUSTRATIONS / ICONS?</h2>
                                        <h3>{{ $user_request->custom_illustration }}</h3>
                                    </div>
                                    <div class="qs-head">
                                        <h2>9. DO YOU HAVE ANY ADDITIONAL INFORMATION? </h2>
                                        <h3>{{ $user_request->additional_information }}</h3>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            @if(isset($request_files) && count($request_files) > 0)
                            <div class="file-img-div">
                                <div class="file-head">
                                    <h3>Folder</h3>
                                </div>
                                <div class="row">
                                    @foreach($request_files as $folder)
                                    @if (Str::endsWith($folder->file_name, '.zip') || Str::endsWith($folder->file_name, '.rar') || Str::endsWith($folder->file_name, '.7z'))
                                    <div class="col-lg-2 col-md-4">
                                        <a href="{{ route('user.zip-files.download',$folder->id) }}">
                                            <div class="file-img-box">
                                                <div class="file-img">
                                                    <img src="{{ asset('user_assets/img/folder.png')}}" alt="">
                                                    <div class="down-load-icon">
                                                        <a href="{{ route('user.zip-files.download',$folder->id) }}"><span><i class="fa-solid fa-arrow-down"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endif
                                   @endforeach 
                                </div>
                                <div class="file-head">
                                    <h3>File</h3>
                                </div>
                                <div class="row">
                                    @foreach($request_files as $file)
                                    @if(Str::endsWith($file->file_name, '.jpg') || Str::endsWith($file->file_name, '.png'))
                                    <div class="col-lg-2 col-md-4">
                                        <a href="{{ route('user.zip-files.download',$file->id) }}">
                                            <div class="file-img-box">
                                                <div class="file-img">
                                                    <img src="{{ asset('user_assets/img/file.png')}}" alt="">
                                                    <div class="down-load-icon">
                                                        <a href=""><span><i class="fa-solid fa-arrow-down"></i></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endif
                                    @endforeach
                                   
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="msg-div">
                                <div class="profile-box-wrap d-flex align-items-center justify-content-between">
                                    <div class="profile-box-div d-flex align-items-center">
                                        <div class="profile-box-img">
                                            <img src="{{ asset('user_assets/img/profile.png')}}" alt="">
                                        </div>
                                        <div class="profile-box-text">
                                            <h3>Designer</h3>
                                            <h4>Thank You</h4>
                                        </div>
                                    </div>
                                    <div class="profile-box-date">
                                        <h3>October 25, 5:00 PM</h3>
                                        <h4><span><i class="ph ph-dots-three"></i></span></h4>
                                    </div>
                                </div>
                                <div class="profile-box-wrap d-flex align-items-center justify-content-between">
                                    <div class="profile-box-div d-flex align-items-center">
                                        <div class="profile-box-img">
                                            <img src="{{ asset('user_assets/img/profile.png')}}" alt="">
                                        </div>
                                        <div class="profile-box-text">
                                            <h3>Designer</h3>
                                            <h4>Thank You</h4>
                                        </div>
                                    </div>
                                    <div class="profile-box-date">
                                        <h3>October 25, 5:00 PM</h3>
                                        <h4><span><i class="ph ph-dots-three"></i></span></h4>
                                    </div>
                                </div>
                                <div class="profile-box-wrap d-flex align-items-center justify-content-between">
                                    <div class="profile-box-div d-flex align-items-center">
                                        <div class="profile-box-img">
                                            <img src="{{ asset('user_assets/img/profile.png')}}" alt="">
                                        </div>
                                        <div class="profile-box-text">
                                            <h3>Designer</h3>
                                            <h4>Thank You</h4>
                                        </div>
                                    </div>
                                    <div class="profile-box-date">
                                        <h3>October 25, 5:00 PM</h3>
                                        <h4><span><i class="ph ph-dots-three"></i></span></h4>
                                    </div>
                                </div>
                                <div class="profile-box-wrap d-flex align-items-center justify-content-between">
                                    <div class="profile-box-div d-flex align-items-center">
                                        <div class="profile-box-img">
                                            <img src="{{ asset('user_assets/img/profile.png')}}" alt="">
                                        </div>
                                        <div class="profile-box-text">
                                            <h3>Designer</h3>
                                            <h4>Thank You</h4>
                                        </div>
                                    </div>
                                    <div class="profile-box-date">
                                        <h3>October 25, 5:00 PM</h3>
                                        <h4><span><i class="ph ph-dots-three"></i></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection