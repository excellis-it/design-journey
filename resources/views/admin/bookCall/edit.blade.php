@extends('admin.layouts.master')
@section('title')
    Career Edit - {{ env('APP_NAME') }}
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
                        <h4>Book A Call</h4>
                    </div>
                    <form action="{{ route('update-book-call') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- if id not available then condition  --}}


                        <input type="hidden" name="id" value="{{ $book_call->id }}">
                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Link*</label>
                                        <input type="text" name="link" class="form-control" id="floatingInputValue"
                                            placeholder="Enter link*" value="{{ $book_call->link }}">
                                        @if ($errors->has('link'))
                                            <div class="error" style="color:red;">{{ $errors->first('link') }}</div>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    
@endpush
