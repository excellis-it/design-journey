@extends('admin.layouts.master')
@section('title')
    Blog Edit - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
 
    <div class="main-content">
        <div class="inner_page">
            <div class="card-title">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="mb-0">Edit</h4>
                    </div>
                </div>
            </div>
            <div class="card search_bar sales-report-card">
                <div class="sales-report-card-wrap">
                    <div class="form-head">
                        <h4>Blog Information</h4>
                    </div>
                    <form action="{{ route('admin.blogs.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Category*</label>
                                        <select name="category_id" class="form-select" aria-label="Default select example">
                                            
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ $blog->blog === $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('category_id'))
                                            <div class="error" style="color:red;">{{ $errors->first('category_id') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Title*</label>
                                        <input type="text" name="title" class="form-control" id="floatingInputValue"
                                            placeholder="Enter title*" value="{{ $blog->title }}">
                                        @if ($errors->has('title'))
                                            <div class="error" style="color:red;">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Slug*</label>
                                        <input type="text" name="slug" class="form-control" id="floatingInputValue"
                                            placeholder="Enter slug*" value="{{ $blog->slug }}">
                                        @if ($errors->has('slug'))
                                            <div class="error" style="color:red;">{{ $errors->first('slug') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Conclusion*</label>
                                        <textarea name="conclusion" class="form-control" id="floatingInputValue"
                                            placeholder="Enter conclusion*" >{{ $blog->conclusion }}</textarea>
                                        @if ($errors->has('conclusion'))
                                            <div class="error" style="color:red;">{{ $errors->first('conclusion') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Description*</label>
                                        <textarea name="description" class="form-control" id="editor1"
                                            placeholder="Enter description*" >{{ $blog->description }}</textarea>
                                        @if ($errors->has('description'))
                                            <div class="error" style="color:red;">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>    

                       


                        <div class="add-more-image">
                            <div class="row justify-content-between">
                                <div class="col-md-6 ">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue"> Blog Main Image *</label>
                                            <input type="file" name="main_image" class="form-control">
                                            @if ($errors->has('main_image'))
                                                <div class="error" style="color:red;">{{ $errors->first('main_image') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue">View Image</label>
                                            <br>
                                            <img src="{{Storage::url($blog->main_image)}}" alt="" width="400px"
                                                height="180px">
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <div class="row justify-content-between">
                                <div class="col-md-6 ">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue"> Blog Image 1*</label>
                                            <input type="file" name="image1" class="form-control">
                                            @if ($errors->has('image1'))
                                                <div class="error" style="color:red;">{{ $errors->first('image1') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue">View Image1</label>
                                            <br>
                                            <img src="{{Storage::url($blog->image1)}}" alt="" width="400px"
                                                height="180px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="add-more-image">
                            <div class="row justify-content-between">
                                <div class="col-md-6 ">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue"> Blog Image 2*</label>
                                            <input type="file" name="image2" class="form-control">
                                            @if ($errors->has('image2'))
                                                <div class="error" style="color:red;">{{ $errors->first('image2') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue">View Image2</label>
                                            <br>
                                            <img src="{{Storage::url($blog->image2)}}" alt="" width="400px"
                                                height="180px">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue">Status</label>
                                            <select name="status" class="form-select" aria-label="Default select example">
                                                <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>Deactive</option>
                                            </select>
                                            @if ($errors->has('status'))
                                                <div class="error" style="color:red;">{{ $errors->first('status') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row justify-content-between">
                            <div class="col-xl-12">
                                <div class="btn-1">
                                    <button type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
