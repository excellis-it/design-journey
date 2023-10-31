@extends('admin.layouts.master')
@section('title')
    All Job Apply Details - {{ env('APP_NAME') }}
@endsection



@push('styles')
@endpush

@section('content')

    <div class="main-content" style="min-height: 842px;">

        <div class="inner_page">
            <div class="card-title">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="mb-0">List</h4>
                    </div>

                </div>
            </div>
            <div class="card table_sec">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Career</th>
                                <th>Name</th>
                                <th>Email</th>                            
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($job_apply_list as $job_apply)
                                <tr>
                                    <td>{{ $job_apply->career->career_name }}</td>
                                    <td>
                                        {{ $job_apply->name }}
                                    </td>
                                    <td>
                                        {{ $job_apply->email }}
                                    </td>
                                    <td>
                                        <a href="{{ route('job-apply.details', $job_apply->id) }}" ><span class="edit-icon"><i
                                            class="ph ph-eye"></i></span></a>
                                        
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
                        "targets": [0, 1, 2]
                    }
                ]
            });

        });
    </script>
    <script>
        $(document).on('click', '#delete', function(e) {
            swal({
                    title: "Are you sure?",
                    text: "To delete this user.",
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
            var user_id = $(this).data('id');
            
            $.ajax({
                type: "POST",
                dataType: "json",
                url: '{{ route('user.change-status') }}',
                data: {
                    'status': status,
                    'user_id': user_id
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
