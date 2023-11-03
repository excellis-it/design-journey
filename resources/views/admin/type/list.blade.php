@extends('admin.layouts.master')
@section('title')
    All Category Details - {{ env('APP_NAME') }}
@endsection



@push('styles')
@endpush

@section('content')
   
    <div class="main-content" style="min-height: 842px;">

        <div class="inner_page">
            <div class="card-title">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="mb-0">Type List</h4>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        <a href="{{ route('types.create') }}" class="btn add-btn"><i class="ph ph-plus"></i> Add a
                            Type</a>
                    </div>
                </div>
            </div>
            <div class="card table_sec">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($types as $type)
                                <tr>
                                    <td>
                                        {{ $type->name }}
                                    </td>
                                    <td>
                                        {{ $type->details }}
                                    </td>

                                    <td>
                                        <div class="edit-1 d-flex align-items-center">
                                            <a href="{{ route('types.edit', $type->id) }}"> <span class="edit-icon"><i
                                                        class="ph ph-pencil-simple"></i></span></a>
                                            <a title="Delete Type" data-route="{{ route('delete.types', $type->id) }}"
                                                id="delete"><span class="trash-icon"><i
                                                        class="ph ph-trash"></i></span></a>
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
                    text: "To delete this type.",
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
