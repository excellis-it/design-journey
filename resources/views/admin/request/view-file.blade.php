@extends('admin.layouts.master')
@section('title')
    All files Details - {{ env('APP_NAME') }}
@endsection



@push('styles')
@endpush

@section('content')
    <section class="">
        <div class="main-content" style="min-height: 836px;">
            <div class="container">
                <div class="file-div">
                    <div class="file-div-wrap">
                        @foreach ($files as $file)
                            <div class="row">
                                <div class="file-date">
                                    <h3>{{ $file->created_at->format('F j, g:i A') }}</h3>
                                </div>
                                <div class="file-img-box">
                                    <div class="col-lg-10">
                                        <p>{{ $file->file_description }}</p>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="file-img">
                                            <a href="{{ route('download.zip-files', $file->id) }}">
                                                {{-- check file extension then match extension_images table then show that extension_images --}}
                                                @php
                                                    $file_ext = pathinfo($file->file_name, PATHINFO_EXTENSION);
                                                    $extension_image = App\Models\ExtensionImage::where('extension', $file_ext)->first();
                                                @endphp
                                                @if($extension_image)
                                                <img src="{{ Storage::url($extension_image->image) }}" alt="">
                                                @else 
                                                <img src="{{ asset('admin_assets/assets/img/logo.png') }}" alt="">
                                                @endif
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
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
