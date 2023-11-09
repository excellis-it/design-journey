@extends('admin.layouts.master')
@section('title')
    All Extension Image Details - {{ env('APP_NAME') }}
@endsection



@push('styles')
@endpush

@section('content')
   
    <div class="main-content" style="min-height: 842px;">

        <div class="inner_page">
            <div class="card-title">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="mb-0">Extension Image List</h4>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        <a href="{{ route('extension-images.create') }}" class="btn add-btn"><i class="ph ph-plus"></i> Add a
                            Extension Image</a>
                    </div>

                </div>
            </div>
            <div class="card table_sec">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Extension</th>
                                <th>File Type</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($extension_images as $extension_image)
                                <tr>
                                    <td>
                                        {{ $extension_image->extension }}
                                    </td>
                                    <td>
                                        {{ $extension_image->name }}
                                    </td>
                                    <td>
                                        <img src="{{ Storage::url($extension_image->image) }}" style="height:100px;weight:150px;">
                                    </td>
                                    <td>
                                        <div class="edit-1 d-flex align-items-center">
                                            <a href="{{ route('extension-images.edit',$extension_image->id) }}" ><span
                                                class="edit-icon"><i class="ph ph-pencil-simple"></i></span></a>
                                            <a title="Delete Extension" data-route="{{ route('delete.extension-images',$extension_image->id) }}" id="delete"><span
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
                        "targets": [2, 3]
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
                    text: "To delete this extension",
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
