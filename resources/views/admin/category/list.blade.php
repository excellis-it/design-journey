@extends('admin.layouts.master')
@section('title')
    All Category Details - {{ env('APP_NAME') }}
@endsection
@push('styles')
    <style>
        .dataTables_filter {
            margin-bottom: 10px !important;
        }
    </style>
@endpush

@section('content')
    <section id="loading">
        <div id="loading-content"></div>
    </section>
    <div class="page-wrapper">

        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Category Information</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ul>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        <a href="{{ route('categories.create') }}" class="btn add-btn"><i class="fa fa-plus"></i> Add a Category</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0">Categories Details</h4>
                            </div>

                        </div>
                    </div>

                    <hr />
                    <div class="table-responsive">
                        <table id="myTable" class="dd table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th> Title</th>
                                    <th> Status</th>
                                    <th> Images</th>
                                    <th> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td><a title="Edit Blog" data-route=""
                                            href="{{ route('categories.edit', $category->id) }}"><i class="fas fa-edit"></i></a></td>
                                        <td>
                                            <div class="button-switch">
                                                <input type="checkbox" id="switch-orange" class="switch toggle-class"
                                                    data-id="{{ $category->id }}" {{ $category->status ? 'checked' : '' }} />
                                                <label for="switch-orange" class="lbl-off"></label>
                                                <label for="switch-orange" class="lbl-on"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <a title="Edit Blog" data-route=""
                                                href="{{ route('categories.edit', $category->id) }}"><i class="fas fa-edit"></i></a>
                                            &nbsp;&nbsp;
   
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
                        "targets": [1, 2]
                    },
                    {
                        "orderable": true,
                        "targets": [0]
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
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(resp) {
                    console.log(resp.success)
                }
            });
        });
    </script>
@endpush
