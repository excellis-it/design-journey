@extends('admin.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Edit About Cms
@endsection
@push('styles')
@endpush

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Details</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Edit Cms</li>
                        </ul>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        {{-- <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_group"><i
                            class="fa fa-plus"></i> Add Category</a> --}}
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-xl-12 mx-auto">
                                <div class="card border-0 border-4">
                                    <div class="card-body">
                                        <form action="{{ route('about.cms.update') }}" method="POST"
                                            enctype="multipart/form-data">

                                            @csrf
                                            <div class="border p-4 rounded">  
                                                <input type="hidden" name="about_cms_id" value="{{ $about->id }}">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Title
                                                            <span style="color: red;">*</span></label>
                                                        <input type="text" name="title" class="form-control"  value="{{ $about->title }}"> 
                                                        @if ($errors->has('title'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('title') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Details <span
                                                                style="color: red;">*</span></label>
                                                        <textarea name="description" cols="12" rows="10"  class="form-control">{{ $about->description }}</textarea>
                                                        @if ($errors->has('description'))
                                                        <div class="error" style="color:red;">
                                                            {{ $errors->first('description') }}</div>
                                                    @endif
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Image <span
                                                                style="color: red;">*</span></label>
                                                        <input type="file" name="image" class="form-control" >
                                                        @if ($errors->has('image'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('image') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Image
                                                            Preview </label>
                                                        <br>
                                                        <img src="{{ asset($about->about_image) }}" alt="" width="450px" height="250px">
                                                    </div>
                                                   
                                                    <label for="inputEnterYourName" class="col-form-label"><h3>Section 1:</h3></label>   
                                                    <hr> 
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Icon1
                                                                <span style="color: red;">*</span></label>
                                                            <input type="file" name="icon1" class="form-control"> 
                                                            @if ($errors->has('icon1'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('icon1') }}</div>
                                                            @endif                                                      
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Icon1
                                                                Preview </label>
                                                            <br>
                                                            <img src="{{ asset($about->icon1) }}" alt="" width="400px" height="180px">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Title1
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="title1" class="form-control"  value="{{ $about->title1 }}"> 
                                                            @if ($errors->has('title1'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('title1') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Details1
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="details1" class="form-control" >{{ $about->details1	}}</textarea> 
                                                            @if ($errors->has('details1'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('details1') }}</div>
                                                            @endif
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Icon2
                                                                <span style="color: red;">*</span></label>
                                                            <input type="file" name="icon2" class="form-control"> 
                                                            @if ($errors->has('icon2'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('icon2') }}</div>
                                                            @endif                                                      
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Icon2
                                                                Preview </label>
                                                            <br>
                                                            <img src="{{ asset($about->icon2) }}" alt="" width="400px" height="180px">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Title2
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="title2" class="form-control"  value="{{ $about->title2 }}"> 
                                                            @if ($errors->has('title2'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('title2') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Details2
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="details2" class="form-control" >{{ $about->details2	}}</textarea> 
                                                            @if ($errors->has('details2'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('details2') }}</div>
                                                            @endif
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Icon3
                                                                <span style="color: red;">*</span></label>
                                                            <input type="file" name="icon3" class="form-control"> 
                                                            @if ($errors->has('icon3'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('icon3') }}</div>
                                                            @endif                                                      
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Icon3
                                                                Preview </label>
                                                            <br>
                                                            <img src="{{ asset($about->icon3) }}" alt="" width="400px" height="180px">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Title3
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="title3" class="form-control"  value="{{ $about->title3 }}"> 
                                                            @if ($errors->has('title3'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('title3') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Details3
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="details3" class="form-control" >{{ $about->details3	}}</textarea> 
                                                            @if ($errors->has('details3'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('details3') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Icon4
                                                                <span style="color: red;">*</span></label>
                                                            <input type="file" name="icon4" class="form-control"> 
                                                            @if ($errors->has('icon4'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('icon4') }}</div>
                                                            @endif                                                      
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Icon4
                                                                Preview </label>
                                                            <br>
                                                            <img src="{{ asset($about->icon4) }}" alt="" width="400px" height="180px">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Title4
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="title4" class="form-control"  value="{{ $about->title4 }}"> 
                                                            @if ($errors->has('title4'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('title4') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Details4
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="details4" class="form-control" >{{ $about->details4	}}</textarea> 
                                                            @if ($errors->has('details4'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('details4') }}</div>
                                                            @endif
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Icon5
                                                                <span style="color: red;">*</span></label>
                                                            <input type="file" name="icon5" class="form-control"> 
                                                            @if ($errors->has('icon5'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('icon5') }}</div>
                                                            @endif                                                      
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Icon5
                                                                Preview </label>
                                                            <br>
                                                            <img src="{{ asset($about->icon5) }}" alt="" width="400px" height="180px">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Title5
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="title5" class="form-control"  value="{{ $about->title5 }}"> 
                                                            @if ($errors->has('title5'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('title5') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Details5
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="details5" class="form-control" >{{ $about->details5	}}</textarea> 
                                                            @if ($errors->has('details5'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('details5') }}</div>
                                                            @endif
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Icon6
                                                                <span style="color: red;">*</span></label>
                                                            <input type="file" name="icon6" class="form-control"> 
                                                            @if ($errors->has('icon6'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('icon6') }}</div>
                                                            @endif                                                      
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Icon6
                                                                Preview </label>
                                                            <br>
                                                            <img src="{{ asset($about->icon6) }}" alt="" width="400px" height="180px">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Title6
                                                                <span style="color: red;">*</span></label>
                                                            <input type="text" name="title6" class="form-control"  value="{{ $about->title6 }}"> 
                                                            @if ($errors->has('title6'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('title6') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="inputEnterYourName" class="col-form-label">Details6
                                                                <span style="color: red;">*</span></label>
                                                            <textarea name="details6" class="form-control" >{{ $about->details6	}}</textarea> 
                                                            @if ($errors->has('details6'))
                                                                <div class="error" style="color:red;">
                                                                    {{ $errors->first('details6') }}</div>
                                                            @endif
                                                        </div>

                                                    </div>  
                                                    
                                                    <div class="row" style="margin-top: 20px; float: left;">
                                                        <div class="col-sm-9">
                                                            <button type="submit"
                                                                class="btn px-5 submit-btn">Update</button>
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
