@extends('admin.layouts.master')
@section('title')
    All Plan Details - {{ env('APP_NAME') }}
@endsection



@push('styles')
@endpush

@section('content')
    <div class="main-content" style="min-height: 842px;">

        <div class="inner_page">
            <div class="card-title">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="mb-0">Plan List</h4>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        <a href="{{ route('users.index') }}" class="btn add-btn"><< Back</a>
                    </div>
                </div>
            </div>
            <div class="card table_sec">
                <div class="table-responsive">
                    <table class="table table-bordered" id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Plan Name</th>
                                <th>Plan Duration</th>
                                <th>Amount</th>
                                <th>Payment Date</th>
                                <th>Expiry Date</th>
                                <th>Subscription status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plan_details as $plan_detail)
                                <tr>
                                    <td>
                                        {{ $plan_detail->plan->plan_name }}
                                    </td>
                                    <td>
                                        {{ $plan_detail->plan->plan_duration }}
                                    </td>
                                    <td>
                                        ${{ $plan_detail->amount }}
                                    </td>
                                    <td>{{ date('d-m-Y', strtotime($plan_detail->payment_date)) }}</td>
                                    <td>{{ date('d-m-Y', strtotime($plan_detail->expiry_date)) }}</td>
                                    <td><span class="badge badge-success">{{ $plan_detail->subscription_status }}</span>
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
@endpush
