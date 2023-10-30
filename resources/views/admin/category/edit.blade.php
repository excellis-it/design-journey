@extends('admin.layouts.master')
@section('title')
    Category Edit - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Edit Category</h4>
            <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
        </div>
        <div class="">
            <ul class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    Home
                </li>
                <li class=""> >>  Category</li>
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
                        <h4>Category Information</h4>
                    </div>
                    <form action="{{ route('categories.update',$category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <input type="hidden" name="id" value="{{ $category->id }}">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Name*</label>
                                        <input type="text" name="name" class="form-control" id="floatingInputValue"
                                            placeholder="Enter name*" value="{{ $category->name }}">
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Slug*</label>
                                        <input type="text" name="slug" class="form-control" id="floatingInputValue"
                                            placeholder="Enter slug*" value="{{ $category->slug }}">
                                        @if ($errors->has('slug'))
                                            <div class="error" style="color:red;">{{ $errors->first('slug') }}</div>
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
                            @foreach ($category->categoryImages as $category_image) 
                            <div class="image-area m-4" id="{{$category_image['id']}}">   
                                <img src="{{ asset($category_image['image']) }}"  alt="" height="150px" width="200px;">                            
                                <a class="remove-image" href="javascript:void(0);" data-id="{{$category_image['id']}}" style="display: inline;">&#215;</a>
                            </div>        
                            @endforeach                         
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue">Status*</label>
                                        <select name="status" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Deactive</option>
                                        </select>
                                        @if ($errors->has('status'))
                                            <div class="error" style="color:red;">{{ $errors->first('status') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

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

<script>
    $('.remove-image').on('click', function() {
        var result = confirm('Are you sure you want to delete?');

        if (result) {
            var id = $(this).attr('data-id');
            $.ajax({
                url: '/admin/categories/deleteImage/' + id,
                type: 'get',
                success: function(response) {
                    $('#'+id).hide();
                }
            });
        }else{
            return false;
        }
    });
</script>
@endpush
