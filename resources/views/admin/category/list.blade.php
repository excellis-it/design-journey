@extends('admin.layouts.master')
@section('title')
    All Category Details - {{ env('APP_NAME') }}
@endsection
@push('styles')
<style>
    
</style>
    
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Category List</h4>
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
                    <div class="col-md-3">
                        <div class="add-button">
                        <a href="{{ route('categories.create') }}" class="btn add-btn"><i class="ph ph-plus"></i> Add a
                            Category</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card table_sec">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        {{ $category->name }}
                                    </td>
                                    <td>
                                        <div class="button-switch">
                                            <input type="checkbox" id="switch-orange" class="switch toggle-class"
                                                data-id="{{ $category->id }}" {{ $category->status ? 'checked' : '' }} />
                                            <label for="switch-orange" class="lbl-off"></label>
                                            <label for="switch-orange" class="lbl-on"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="edit-1 d-flex align-items-center">
                                            <a href=""> <span class="edit-icon"><i
                                                        class="ph ph-pencil-simple"></i></span></a>
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
    <script>
        $(document).ready(function() {
            //Default data table
            $('#myTable').DataTable({
                "aaSorting": [],
                "columnDefs": [{
                        "orderable": false,
                        "targets": [2]
                    },
                    {
                        "orderable": true,
                        "targets": [0, 1]
                    }
                ]
            });

        });
    </script>
    <script>
        $(document).on('click', '#delete', function(e) {
            swal({
                    title: "Are you sure?",
                    text: "To delete this blog.",
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
    <script>
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var cat_id = $(this).data('id');

            $.ajax({
                type: "POST",
                dataType: "json",
                url: '{{ route('categories.change-status') }}',
                data: {
                    'status': status,
                    'cat_id': cat_id
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(resp) {
                    console.log(resp.success)
                }
            });
        });
    </script>
@endpush
