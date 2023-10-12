@extends('admin.layouts.master')
@section('title')
    Type Create - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Create Type</h4>
            <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
        </div>
        <div class="">
            <ul class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    Home
                </li>
                <li class=""> >>  Type</li>
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
                        <h4>Type Information</h4>
                    </div>
                    <form action="{{ route('types.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Name*</label>
                                        <input type="text" name="name" class="form-control" id="floatingInputValue"
                                            placeholder="Enter name*" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Slug*</label>
                                        <input type="text" name="slug" class="form-control" id="floatingInputValue"
                                            placeholder="Enter slug*" value="{{ old('slug') }}">
                                        @if ($errors->has('slug'))
                                            <div class="error" style="color:red;">{{ $errors->first('slug') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <div class="row justify-content-between">
                            <div class="col-md-6 ">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Icon*</label>
                                        <input type="file" name="icon" class="form-control">
                                        @if ($errors->has('icon'))
                                            <div class="error" style="color:red;">{{ $errors->first('icon') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Details*</label>
                                        <textarea name="details" class="form-control" id="floatingInputValue"
                                            placeholder="Enter details*" value="{{ old('details') }}"></textarea>
                                        @if ($errors->has('details'))
                                            <div class="error" style="color:red;">{{ $errors->first('details') }}</div>
                                        @endif
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
