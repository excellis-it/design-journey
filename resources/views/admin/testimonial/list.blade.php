@extends('admin.layouts.master')
@section('title')
    All Testimonial Details - {{ env('APP_NAME') }}
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
                    <div class="col-auto float-end ms-auto">
                        <a href="{{ route('testimonial.create') }}" class="btn add-btn"><i class="ph ph-plus"></i> Add a
                            Testimonial</a>
                    </div>

                </div>
            </div>
            <div class="card table_sec">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $key=>$testimonial)
                                <tr>
                                    <td>
                                        {{$key +1 }}
                                    </td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>
                                        <img src="{{Storage::url($testimonial->image)}}" style="width:100px;height:100px;">
                                    </td>

                                    
                                    <td>{!! $testimonial->message !!}</td>
                                    <td>
                                        <div class="edit-1 d-flex align-items-center">
                                        <a title="Delete testimonial" data-route="{{ route('delete.testimonials',$testimonial->id) }}"
                                                            id="delete"><span class="trash-icon"><i class="ph ph-trash"></i></span></a> 
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
                        "targets": [0]
                    },
                    {
                        "orderable": true,
                        "targets": [1,2,3]
                    }
                ]
            });

        });
    </script>
    <script>
        $(document).on('click', '#delete', function(e) {
            swal({
                    title: "Are you sure?",
                    text: "To delete this testimonial.",
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
