@extends('admin.layouts.master')
@section('title')
    About Cms Edit - {{ env('APP_NAME') }}
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
                        <h4>About Cms Information</h4>
                    </div>
                    <form action="{{ route('about.cms.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <input type="hidden" name="about_cms_id" value="{{ $about->id }}">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Title*</label>
                                        <input type="text" name="title" class="form-control"
                                            id="floatingInputValue" placeholder="Enter banner title*"
                                            value="{{ $about->title }}">
                                        @if ($errors->has('title'))
                                            <div class="error" style="color:red;">{{ $errors->first('title') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Details *</label>
                                        <textarea name="description" class="form-control" id="floatingInputValue">{{ $about->description }}</textarea>
                                        @if ($errors->has('description'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Image*</label>
                                        <input type="file" name="image" class="form-control">
                                        @if ($errors->has('image'))
                                            <div class="error" style="color:red;">{{ $errors->first('image') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Preview</label>
                                        <br>
                                        <img src="{{Storage::url($about->about_image)}}" alt="" width="400px"
                                            height="180px">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label"><h3>Section 1:</h3></label>   
                        <hr> 

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Icon1*</label>
                                        <input type="file" name="icon1" class="form-control">
                                        @if ($errors->has('icon1'))
                                            <div class="error" style="color:red;">{{ $errors->first('icon1') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Preview</label>
                                        <br>
                                        <img src="{{Storage::url($about->icon1)}}" alt="" width="400px"
                                            height="180px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Title1*</label>
                                        <input type="text" name="title1" class="form-control"
                                            id="floatingInputValue" placeholder="Enter title1*"
                                            value="{{ $about->title1 }}">
                                        @if ($errors->has('title1'))
                                            <div class="error" style="color:red;">{{ $errors->first('title1') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Details1 *</label>
                                        <textarea name="details1" class="form-control" id="floatingInputValue">{{ $about->details1 }}</textarea>
                                        @if ($errors->has('details1'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('details1') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Icon2*</label>
                                        <input type="file" name="icon2" class="form-control">
                                        @if ($errors->has('icon2'))
                                            <div class="error" style="color:red;">{{ $errors->first('icon2') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Preview</label>
                                        <br>
                                        <img src="{{Storage::url($about->icon2)}}" alt="" width="400px"
                                            height="180px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Title2*</label>
                                        <input type="text" name="title2" class="form-control"
                                            id="floatingInputValue" placeholder="Enter title2*"
                                            value="{{ $about->title2 }}">
                                        @if ($errors->has('title2'))
                                            <div class="error" style="color:red;">{{ $errors->first('title2') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Details2*</label>
                                        <textarea name="details2" class="form-control" id="floatingInputValue">{{ $about->details2 }}</textarea>
                                        @if ($errors->has('details2'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('details2') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Icon3*</label>
                                        <input type="file" name="icon3" class="form-control">
                                        @if ($errors->has('icon3'))
                                            <div class="error" style="color:red;">{{ $errors->first('icon3') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Preview</label>
                                        <br>
                                        <img src="{{Storage::url($about->icon3)}}" alt="" width="400px"
                                            height="180px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Title3*</label>
                                        <input type="text" name="title3" class="form-control"
                                            id="floatingInputValue" placeholder="Enter title3*"
                                            value="{{ $about->title3 }}">
                                        @if ($errors->has('title3'))
                                            <div class="error" style="color:red;">{{ $errors->first('title3') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Details3*</label>
                                        <textarea name="details3" class="form-control" id="floatingInputValue">{{ $about->details3 }}</textarea>
                                        @if ($errors->has('details3'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('details3') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Icon4*</label>
                                        <input type="file" name="icon4" class="form-control">
                                        @if ($errors->has('icon4'))
                                            <div class="error" style="color:red;">{{ $errors->first('icon4') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Preview</label>
                                        <br>
                                        <img src="{{Storage::url($about->icon4)}}" alt="" width="400px"
                                            height="180px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Title4*</label>
                                        <input type="text" name="title4" class="form-control"
                                            id="floatingInputValue" placeholder="Enter title4*"
                                            value="{{ $about->title4 }}">
                                        @if ($errors->has('title4'))
                                            <div class="error" style="color:red;">{{ $errors->first('title4') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Details4*</label>
                                        <textarea name="details4" class="form-control" id="floatingInputValue">{{ $about->details4 }}</textarea>
                                        @if ($errors->has('details4'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('details4') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Icon5*</label>
                                        <input type="file" name="icon5" class="form-control">
                                        @if ($errors->has('icon5'))
                                            <div class="error" style="color:red;">{{ $errors->first('icon5') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Preview</label>
                                        <br>
                                        <img src="{{Storage::url($about->icon5)}}" alt="" width="400px"
                                            height="180px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Title5*</label>
                                        <input type="text" name="title5" class="form-control"
                                            id="floatingInputValue" placeholder="Enter title5*"
                                            value="{{ $about->title5 }}">
                                        @if ($errors->has('title5'))
                                            <div class="error" style="color:red;">{{ $errors->first('title5') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Details5*</label>
                                        <textarea name="details5" class="form-control" id="floatingInputValue">{{ $about->details5 }}</textarea>
                                        @if ($errors->has('details5'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('details5') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Icon6*</label>
                                        <input type="file" name="icon6" class="form-control">
                                        @if ($errors->has('icon6'))
                                            <div class="error" style="color:red;">{{ $errors->first('icon6') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Preview</label>
                                        <br>
                                        <img src="{{Storage::url($about->icon6)}}" alt="" width="400px"
                                            height="180px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Title6*</label>
                                        <input type="text" name="title6" class="form-control"
                                            id="floatingInputValue" placeholder="Enter title6*"
                                            value="{{ $about->title6 }}">
                                        @if ($errors->has('title6'))
                                            <div class="error" style="color:red;">{{ $errors->first('title6') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Details6*</label>
                                        <textarea name="details6" class="form-control" id="floatingInputValue">{{ $about->details6 }}</textarea>
                                        @if ($errors->has('details6'))
                                            <div class="error" style="color:red;">
                                                {{ $errors->first('details6') }}</div>
                                        @endif
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
