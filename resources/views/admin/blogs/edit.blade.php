@extends('admin.layouts.master')
@section('title')
{{ env('APP_NAME') }} | Edit Blog Details
@endsection
@push('styles')
@endpush

@section('content')
<div class="page-wrapper">

    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Edit Blog Details</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Blogs</a></li>
                        <li class="breadcrumb-item active">Edit Blogs Details</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    {{-- <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_group"><i
                            class="fa fa-plus"></i> Add Customer</a> --}}
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <h6 class="mb-0 text-uppercase">Edit A Blog</h6>
                        <hr>
                        <div class="card border-0 border-4">
                            <div class="card-body">
                                <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                                   
                                    @csrf
                                    <div class="border p-4 rounded">
                                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Title <span style="color: red;">*</span></label>
                                                <input type="text" name="title" id="" class="form-control" value="{{ $blog->title }}" placeholder="Enter Blog Title">
                                                @if($errors->has('title'))
                                                <div class="error" style="color:red;">{{ $errors->first('title') }}</div>
                                                @endif
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Slug <span style="color: red;">*</span></label>
                                                <input type="text" name="slug" id="" class="form-control" value="{{ $blog->slug }}" placeholder="Enter Blog Slug">
                                                @if($errors->has('slug'))
                                                <div class="error" style="color:red;">{{ $errors->first('slug') }}</div>
                                                @endif
                                            </div>

                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Description <span style="color: red;">*</span></label>
                                                <textarea name="description" cols="30" rows="10" class="form-control" id="editor1" value="{{ $blog->description }}" placeholder="Enter Blog Description">{{ $blog->description }}</textarea>
                                                @if($errors->has('description'))
                                                <div class="error" style="color:red;">{{ $errors->first('description') }}</div>
                                                @endif
                                            </div>  

                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Conclusion <span style="color: red;">*</span></label>
                                                <textarea name="conclusion" cols="15" rows="10" class="form-control" value="{{ $blog->conclusion }}"  placeholder="Enter Blog Conclusion">{{ $blog->conclusion }}</textarea>
                                                @if($errors->has('conclusion'))
                                                <div class="error" style="color:red;">{{ $errors->first('conclusion') }}</div>
                                                @endif
                                            </div> 
                                            
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Blog Main Image <span style="color: red;">*</span></label>
                                                <input type="file" name="main_image" id="" class="form-control" >
                                                @if($errors->has('main_image'))
                                                <div class="error" style="color:red;">{{ $errors->first('main_image') }}</div>
                                                @endif
                                            </div>

                                            @if($blog->main_image)
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label">View Image </label>
                                                <br>
                                               <img src="{{ asset($blog->main_image) }}" alt="" height="200px" width="400px;">
                                            </div>
                                            @endif

                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Blog Image 1 <span style="color: red;">*</span></label>
                                                <input type="file" name="image1" id="" class="form-control" value="{{ old('image1') }}">
                                                @if($errors->has('image1'))
                                                <div class="error" style="color:red;">{{ $errors->first('image1') }}</div>
                                                @endif
                                            </div>

                                            @if($blog->image1)
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label">View Image </label>
                                                <br>
                                               <img src="{{ asset($blog->image1) }}" alt="" height="200px" width="400px;">
                                            </div>
                                            @endif

                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Blog Image 2 <span style="color: red;">*</span></label>
                                                <input type="file" name="image2" id="" class="form-control" value="{{ old('image2') }}">
                                                @if($errors->has('image2'))
                                                <div class="error" style="color:red;">{{ $errors->first('image2') }}</div>
                                                @endif
                                            </div>

                                            @if($blog->image2)
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label">View Image </label>
                                                <br>
                                               <img src="{{ asset($blog->image2) }}" alt="" height="200px" width="400px;">
                                            </div>
                                            @endif
                                            
                                            <div class="col-md-6">
                                                <label for="inputEnterYourName" class="col-form-label"> Status <span style="color: red;">*</span></label>
                                                <select name="status" id="" class="form-control">
                                                    <option value="">Select a Status</option>
                                                    <option value="1" @if($blog['status'] == 1) selected="" @endif>Active</option>
                                                    <option value="0" @if($blog['status'] == 0) selected="" @endif>Inactive</option>
                                                </select>
                                                @if($errors->has('status'))
                                                <div class="error" style="color:red;">{{ $errors->first('status') }}</div>
                                                @endif
                                            </div>
                                        </div>    
                                        <div class="row" style="margin-top: 20px; float: left;">
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn px-5 submit-btn">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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

@push('scripts')
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
    CKEDITOR.on('instanceReady', function(evt) {
        var editor = evt.editor;

        editor.on('change', function(e) {
            var contentSpace = editor.ui.space('contents');
            var ckeditorFrameCollection = contentSpace.$.getElementsByTagName('iframe');
            var ckeditorFrame = ckeditorFrameCollection[0];
            var innerDoc = ckeditorFrame.contentDocument;
            var innerDocTextAreaHeight = $(innerDoc.body).height();
            console.log(innerDocTextAreaHeight);
        });
    });
</script>

@endpush