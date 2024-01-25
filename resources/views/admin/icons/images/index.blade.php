@extends('admin.layouts.master')
@section('title')
    Icon  Images - {{ env('APP_NAME') }}
@endsection

@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Icon  List</h4>
        </div>
        <div class="">
            <ul class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    Home
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ul>
        </div>
    </section>
    <div class="main-content" style="min-height: 842px;">

        <div class="inner_page">
            <div class="card-title">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="mb-0">List</h4>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        <a href="{{ route('icons.image.create') }}" class="btn add-btn"><i class="ph ph-plus"></i> Add  images
                            </a>
                    </div>
                </div>
            </div>
            <div class="card table_sec">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($icon_images as $icon_image)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img img-fluid"><img src="{{ Storage::url($icon_image->images) }}" alt="story-img" class="rounded-circle avatar-40" height="50" width="50"></div>
                                            <div class="ms-3">
                                                <h5 class="mb-0">{{ $icon_image->image_name }}</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $icon_image->icon_category->category_name }}</td>
                                    <td>{{ $icon_image->style_type }}</td>
                                    <td>
                                        <div class="edit-1 d-flex align-items-center">
                                        {{-- <a href="{{ route('icons.image.edit', $icon_image->illustration_category_id) }}"> <span class="edit-icon"><i
                                                    class="ph ph-pencil-simple"></i></span></a> --}}
                                        <a title="Delete Blog" data-route="{{ route('delete.image.icons',$icon_image->id) }}"
                                            id="delete"><span class="trash-icon"><i class="ph ph-trash"></i></span></a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            //Default data table
            $('#myTable').DataTable({
                "aaSorting": [],
                "columnDefs": [{
                        "orderable": false,
                        "targets": [3]
                    },
                    {
                        "orderable": true,
                        "targets": [0, 1,2]
                    }
                ]
            });

        });
    </script>
    <script>
        $(document).on('click', '#delete', function(e) {
            swal({
                    title: "Are you sure?",
                    text: "To delete this free illustration.",
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
