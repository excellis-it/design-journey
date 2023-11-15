@extends('user.layouts.master')
@section('title')
Brand Create - {{ env('APP_NAME') }}
@endsection
@push('styles')
<style>
    .dots-container {
    position: relative;
    display: inline-block;
}

.dots-toggle {
    background: none;
    border: none;
    padding: 0;
    cursor: pointer;
    font-size: 18px; /* Adjust the font size as needed */
}

.dropdown-menu {
    min-width: 0; /* Allow the menu to shrink to fit content */
}
    </style>
@endpush

@section('content')
<div class="main-content" style="min-height: 842px;">
    <!-- form -->
    <div class="order-form">
        <section class="brand-sec">
            <div class="container-fluid">
                <div class="brand-sec-wrap">
                    <div class="brand-sec-head">
                        <h2>Brand Profiles</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="brand-text">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, voluptatum. Fugit animi iure earum. Tempore, voluptate ipsum autem totam nisi ea fugiat porro aliquam iusto consequatur iste vero distinctio illum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="create-brand-btn">
                        <a href="" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="ph ph-stop-circle"></i>Create Brand profile</a>
                    </div>
                    <div class="row">
                        @foreach($brand_profile as $brand)
                        <div class="col-lg-4">
                            <div class="create-brand-box-wrap d-flex align-items-center justify-content-between">
                                <div class="create-brand-box d-flex align-items-center">
                                    <h3>{{ substr($brand->brand_name, 0, 2) }}</h3>
                                    <h4>{{ $brand->brand_name }}</h4>
                                </div>
                                {{-- <div class="create-brand-box create-brand-box-dot">
                                    <h4><a href="{{ route('edit.brand-profile',$brand->id) }}"><i class="ph ph-dots-three"></i></a></h4>
                                </div> --}}

                                <div class="dots-container">
                                    <button type="button" class="btn dots-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        &#8230; <!-- Unicode character for horizontal ellipsis -->
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('edit.brand-profile',$brand->id) }}">Edit</a>
                                        <a title="Delete Category" class="dropdown-item" data-route="{{ route('delete.brand-profile',$brand->id) }}" id="delete">Delete</a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>


    

    <!-- Modal -->
    <div class="modal modal-create fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="exampleModalLabel">Create Brand Profile</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('brand-profile.store') }}" method="post" id="brandProfileForm">
                @csrf
                    <div class="modal-body">
                        <div class="create-form">                    
                            <div class="form-group">
                                <label for="brand_name">Name</label>
                                <input type="text" class="form-control" name="brand_name"  id="brand_name">
                                
                                <span id="nameError" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="brand_description">Description</label>
                                <textarea class="form-control" id="brand_description" placeholder="Tell us about your brand" name="brand_description" rows="4"></textarea>
                                <span id="descriptionError" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-left">
                        <button type="submit" class="btn" id="createBrandProfile">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script>
    $(document).on('click', '#delete', function(e) {
        swal({
                title: "Are you sure?",
                text: "To delete this brand.",
                type: "warning",
                confirmButtonText: "Yes",
                showCancelButton: true
            })
            .then((result) => {
                if (result.value) {
                    window.location = $(this).data('route');
                } else if (result.dismiss === 'cancel') {
                    swal(
                        'Cancelled',
                        'Your stay here :)',
                        'error'
                    )
                }
            })
    });
</script>

@endpush