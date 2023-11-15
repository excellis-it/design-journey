@extends('admin.layouts.master')
@section('title')
    All Social Media Details - {{ env('APP_NAME') }}
    
    
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">

@push('styles')
@endpush

@section('content')
   
    <div class="main-content" style="min-height: 842px;">

        <div class="inner_page">
            <div class="card-title">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="mb-0"> List</h4>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        <a href="{{ route('footer-cms.create') }}" class="btn add-btn"><i class="ph ph-plus"></i> Add a
                            Social </a>
                    </div>
                </div>
            </div>
            <div class="card table_sec">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" class="display">
                        <thead>
                            <tr>
                                <th> Icon</th> 
                                <th> Link</th>
                                <th> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($footer_cms as $key => $value)
                                    <tr>
                                        <td><i class="{{ $value->social_icon }}"></i></td>
                                        <td>{{ $career->social_link }}</td>
                                        <td>
                                            <div class="edit-1 d-flex align-items-center">
                                                <a href="{{ route('footer-cms.edit', $value->id) }}"> <span class="edit-icon"><i
                                                            class="ph ph-pencil-simple"></i></span></a>
                                                <a title="Delete Career" data-route="{{ route('delete.footer-cms',$value->id) }}"
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

<script>
    $(document).on('click', '#delete', function(e) {
        
        swal({
                title: "Are you sure?",
                text: "To delete this career.",
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
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
   
    <script>
        $(document).ready(function() {
            //Default data table
            $('#myTable').DataTable({
                "aaSorting": [],
                "columnDefs": [{
                        "orderable": false,
                        "targets": [4]
                    },
                    {
                        "orderable": true,
                        "targets": [0, 1, 2, 3]
                    }
                ]
            });

        });
    </script>
    
    <script>
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var blog_id = $(this).data('id');

            $.ajax({
                type: "POST",
                dataType: "json",
                url: '{{ route('blogs.change-status') }}',
                data: {
                    'status': status,
                    'blog_id': blog_id
                },
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(resp) {
                    console.log(resp.success)
                }
            });
        });
    </script>
@endpush
