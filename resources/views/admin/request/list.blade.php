@extends('admin.layouts.master')
@section('title')
    All Request List - {{ env('APP_NAME') }}
@endsection



@push('styles')
@endpush

@section('content')
   
    <div class="main-content" style="min-height: 842px;">

        <div class="inner_page">
            <div class="card-title">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="mb-0">Request List</h4>
                    </div>

                </div>
            </div>
            <div class="card table_sec">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Request Name</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $request)
                                <tr>
                                    <td>{{ $request->User->name }}</td>
                                    <td>{{ $request->request_name }}</td>
                                    <td>{{ $request->Type->name }}</td>
                                    <td>{{ $request->created_at->format('F j, g:i A') }}</td>
                                    <td>
                                        <select name="status" class="form-control request-status" data-id="{{ $request->id }}">
                                            <option value="Pending" {{ $request->status == 'Pending' ? 'selected' : '' }}>
                                                Pending</option>
                                            <option value="Accept" {{ $request->status == 'Accept' ? 'selected' : '' }}>
                                                Accept</option>
                                            <option value="Pause" {{ $request->status == 'Pause' ? 'selected' : '' }}>Pause
                                            </option>
                                            <option value="Delivered"
                                                {{ $request->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                        </select>
                                    </td>

                                    <td>
                                        <div class="edit-1 d-flex align-items-center">
                                            <a href="{{ route('admin.request-details', $request->id) }}"> <span class="edit-icon"><i
                                                        class="ph ph-eye"></i></span></a>
                                            <a href="{{ route('request-files.view', $request->id) }}"> <span class="edit-icon"><i
                                                        class="ph ph-files"></i></span></a>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            //Default data table
            $('#myTable').DataTable({
                "aaSorting": [],
                "columnDefs": [{
                        "orderable": false,
                        "targets": [5]
                    },
                    {
                        "orderable": true,
                        "targets": [0, 1, 2, 3, 4]
                    }
                ]
            });

        });
    </script>

    <script>
        $(document).ready(function() {
            $('.request-status').on('change', function() {
                var status = $('.request-status').val();
                var id = $('.request-status').data('id');

                // Show a confirmation SweetAlert
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'Do you want to update the request status?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // User confirmed, proceed with the AJAX request
                        $.ajax({
                            type: "POST",
                            url: "{{ route('change.request-status') }}",
                            data: {
                                status: status,
                                id: id,   
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                // Handle the response from the server
                                console.log(
                                response); // You can replace this with your own handling code

                                // Show a success SweetAlert
                                Swal.fire({
                                    title: 'Success!',
                                    text: 'Request status has been updated.',
                                    icon: 'success'
                                });
                            },
                            error: function(xhr, status, error) {
                                // Handle any errors that occur during the request
                                console.error(error);

                                // Show an error SweetAlert
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'An error occurred. Please try again later.',
                                    icon: 'error'
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
