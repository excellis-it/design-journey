@extends('admin.layouts.master')
@section('title')
    All Faq Details - {{ env('APP_NAME') }}
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
                        <h4 class="mb-0">Faq List</h4>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        <a href="{{ route('faqs.create') }}" class="btn add-btn"><i class="ph ph-plus"></i> Add a
                            Faq</a>
                    </div>
                </div>
            </div>
            <div class="card table_sec">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" class="display">
                        <thead>
                            <tr>
                                <th> Question</th>
                                <th> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faqs as $key => $faq)
                                <tr>
                                    <td>{!! Str::limit($faq->question, 80) !!}</td>
                                    <td>
                                        <div class="edit-1 d-flex align-items-center">
                                            <a href="{{ route('edit.faqs', $faq->id) }}"> <span class="edit-icon"><i
                                                        class="ph ph-pencil-simple"></i></span></a>
                                            <a title="Delete Blog" data-route="{{ route('delete.faqs', $faq->id) }}"
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
    <script>
        $(document).on('click', '#delete', function(e) {

            swal({
                    title: "Are you sure?",
                    text: "To delete this faq.",
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
@endpush
