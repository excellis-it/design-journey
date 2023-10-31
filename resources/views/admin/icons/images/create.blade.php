@extends('admin.layouts.master')
@section('title')
     Illustration Image Create - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Create Illustration Image Category</h4>
            <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
        </div>
        <div class="">
            <ul class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    Home
                </li>
                <li class=""> >> Illustration Category Image</li>
            </ul>
        </div>
    </section>

    <div class="main-content">
        <div class="inner_page">
            <div class="card-title">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="mb-0">Create</h4>
                    </div>
                </div>
            </div>
            <div class="card search_bar sales-report-card">
                <div class="sales-report-card-wrap">
                    <div class="form-head">
                        <h4>Category Image Information</h4>
                    </div>
                    <form action="{{ route('icons.image.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Category*</label>
                                        <select name="icon_category" class="form-select" aria-label="Default select example">
                                            <option selected value="">Select</option>
                                            @foreach($icon_categories as $icon_category)
                                                <option value="{{ $icon_category->id }}">{{ $icon_category->category_name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('icon_category'))
                                            <div class="error" style="color:red;">{{ $errors->first('icon_category') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Style*</label>
                                        <select name="style_type" class="form-select" aria-label="Default select example">
                                            <option selected value="">Select</option>
                                            <option value="Outline">Outline</option>
                                            <option value="Flatline">Flatline</option>
                                            <option value="Two color">Two color</option>
                                            <option value="Isometric">Isometric</option>
                                            <option value="Monochromatic">Monochromatic</option>
                                        </select>
                                        @if ($errors->has('style_type'))
                                            <div class="error" style="color:red;">{{ $errors->first('style_type') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="add-more-image">
                            <div class="row justify-content-between">
                                <div class="col-md-4">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue"> Image*</label>
                                            <input type="file" name="image[]" class="form-control">
                                            @if ($errors->has('image'))
                                                <div class="error" style="color:red;">{{ $errors->first('image') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <label for="floatingInputValue"> Image name*</label>
                                            <input type="text" name="image_name[]" class="form-control" placeholder="Enter name">
                                            @if ($errors->has('image_name'))
                                                <div class="error" style="color:red;">{{ $errors->first('image_name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group-div">
                                        <div class="form-group">
                                            <a class="btn btn-primary add-image">Add Image</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row justify-content-between">
                            <div class="col-xl-12">
                                <div class="btn-1">
                                    <button type="submit">Create</button>
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
<script>
    // add more functionality for milestone
    $(document).ready(function() {
        $('.add-image').click(function() {

            var html = '';
            html += '<div class="row">';
            html += '<div class="col-md-4">';
            html += '<div class="form-group-div">';
            html += '<div class="form-group">';
            html += '<label for="floatingInputValue"> Image</label>';
            html += '<input type="file" name="image[]" class="form-control">';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '<div class="col-md-4">';
            html += '<div class="form-group-div">';
            html += '<div class="form-group">';
            html += '<label for="floatingInputValue"> Image name</label>';
            html += '<input type="text" name="image_name[]" class="form-control" placeholder="Enter name">';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '<div class="col-md-4">';
            html += '<div class="form-group-div">';
            html += '<div class="form-group">';
            html += '<a class="btn btn-danger remove">Remove</a>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            $('.add-more-image').append(html);
        });
        $(document).on('click', '.remove', function() {
            $(this).closest('.row').remove();
        });
    });
</script>

@endpush
