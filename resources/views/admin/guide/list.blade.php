@extends('admin.layouts.master')
@section('title')
    Guide - {{ env('APP_NAME') }}
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
                        <a href="{{ route('guides.create') }}" class="btn add-btn"><i class="ph ph-plus"></i> Add a
                            Guide</a>
                    </div>
                </div>
            </div>
            <div class="card table_sec">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Title</th>
                                
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guides as $guide)
                                <tr>
                                    <td>{{ $guide->title }}</td>
                                                          
                                    <td>
                                        <div class="edit-1 d-flex align-items-center">
                                            <a href="{{ route('edit.guides', $guide->id) }}"> <span class="edit-icon"><i class="ph ph-pencil-simple"></i></span></a>
                                            <a title="Delete Plan" data-route="{{ route('delete.guides',$guide->id) }}" id="delete"><span class="trash-icon"><i class="ph ph-trash"></i></span></a>
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
                        "targets": [1]
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
                    text: "To delete this guide.",
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
