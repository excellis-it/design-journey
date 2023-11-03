@extends('admin.layouts.master')
@section('title')
    All files Details - {{ env('APP_NAME') }}
@endsection



@push('styles')
@endpush

@section('content')
    <section class="">
        <div class="main-content" style="min-height: 836px;">
            <div class="container-fluid">
                <div class="file-div">
                    <div class="file-div-wrap">
                        @foreach ($files as $file)
                            <div class="row">
                                <div class="file-date">
                                    <h3>{{ $file->created_at->format('F j, g:i A') }}</h3>
                                </div>
                                <div class="col-lg-10">
                                    <div class="file-description">
                                        <p>{{ $file->file_description }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="file-img-box">
                                        <div class="file-img">
                                            <a href="{{ route('download.zip-files', $file->id) }}">
                                                <img src="{{ asset('admin_assets/assets/img/files.png') }}" alt="">
                                            </a>
                                            <div class="down-load-icon">
                                                <a href="{{ route('download.zip-files', $file->id) }}"><span><i
                                                            class="ph ph-download-simple"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="row">
                        <div class="file-date">
                            <h3>26/10/2023</h3>
                        </div>
                        <div class="col-lg-10">
                            <div class="file-description">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis, explicabo culpa, quas perferendis aspernatur a iusto fuga adipisci repellendus neque odio excepturi voluptatibus dicta amet ullam sit quos. Eaque.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis, explicabo culpa, quas perferendis aspernatur a iusto fuga adipisci </p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="file-img-box">
                                <div class="file-img"><a href="">
                                        <img src="{{ asset('admin_assets/assets/img/files.png') }}" alt="">
                                    </a>
                                    <div class="down-load-icon">
                                        <a href=""><span><i class="ph ph-download-simple"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-date">
                            <h3>26/10/2023</h3>
                        </div>
                        <div class="col-lg-10">
                            <div class="file-description">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis, explicabo culpa, quas perferendis aspernatur a iusto fuga adipisci repellendus neque odio excepturi voluptatibus dicta amet ullam sit quos. Eaque.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis, explicabo culpa, quas perferendis aspernatur a iusto fuga adipisci </p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="file-img-box">
                                <div class="file-img"><a href="">
                                        <img src="{{ asset('admin_assets/assets/img/files.png') }}" alt="">
                                    </a>
                                    <div class="down-load-icon">
                                        <a href=""><span><i class="ph ph-download-simple"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
