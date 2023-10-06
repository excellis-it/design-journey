@extends('admin.layouts.master')
@section('title')
     Illustration Image Edit - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Edit Illustration Image Category</h4>
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
                        <h4 class="mb-0">Edit</h4>
                    </div>
                </div>
            </div>
            <div class="card search_bar sales-report-card">
                <div class="sales-report-card-wrap">
                    <div class="form-head">
                        <h4>Category Image Information</h4>
                    </div>
                    <form action="{{ route('free-illustrations.image.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Category*</label>
                                        <select name="illustration_category" class="form-select" aria-label="Default select example">
                                            <option selected value="">Select</option>
                                            @foreach($illustration_categories as $illustration_category)
                                                <option value="{{ $illustration_category->id }}" {{$illustration_image->illustration_category_id = $illustration_category->id ? 'selected': '' }}>{{ $illustration_category->category_name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('illustration_category'))
                                            <div class="error" style="color:red;">{{ $errors->first('illustration_category') }}</div>
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
                                            <option value="Outline" {{ $illustration_image->style_type == 'Outline' ? 'selected' : '' }}>Outline</option>
                                            <option value="Flatline" {{ $illustration_image->style_type == 'Flatline' ? 'selected' : '' }}>Flatline</option>
                                            <option value="Two color" {{ $illustration_image->style_type == 'Two color' ? 'selected' : '' }}>Two color</option>
                                            <option value="Isometric" {{ $illustration_image->style_type == 'Isometric' ? 'selected' : '' }}>Isometric</option>
                                            <option value="Monochromatic" {{ $illustration_image->style_type == 'Monochromatic' ? 'selected' : '' }}>Monochromatic</option>
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
                                <div class="col-md-6 ">
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


                                <div class="col-md-6">
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
            html += '<div class="col-md-6">';
            html += '<div class="form-group-div">';
            html += '<div class="form-group">';
            html += '<label for="floatingInputValue"> Image*</label>';
            html += '<input type="file" name="image[]" class="form-control">';
            html += '</div>';
            html += '</div>';
            html += '</div>';
            html += '<div class="col-md-6">';
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
