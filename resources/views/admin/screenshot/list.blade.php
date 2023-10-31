@extends('admin.layouts.master')
@section('title')
    All Screenshot Details - {{ env('APP_NAME') }}
@endsection



@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Screenshot List</h4>
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
                        <a href="{{ route('screenshot.create') }}" class="btn add-btn"><i class="ph ph-plus"></i> Add a
                            Screen Shot</a>
                    </div>

                </div>
            </div>
            <div class="card table_sec">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Screenshot</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($screenshots as $key=>$screenshot)
                                <tr>
                                    <td>
                                        {{$key +1 }}
                                    </td>
                                    <td>
                                        <img src="{{ asset($screenshot->image) }}" style="width:100px;height:100px;">
                                    </td>
                                    <td>
                                        <div class="edit-1 d-flex align-items-center">
                                            <a title="Delete Screenshot" href="{{ route('edit.screenshot',$screenshot->id) }}" id="edit"><span class="edit-icon"><i class="ph ph-pencil-simple"></i></span></a>
                                            <a title="Delete Screenshot" data-route="{{ route('delete.screenshot',$screenshot->id) }}" id="delete"><span
                                                    class="trash-icon"><i class="ph ph-trash"></i></span></a>
                                        </div>
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
                    text: "To delete this screenshot.",
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
