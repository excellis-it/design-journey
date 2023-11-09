@extends('user.layouts.master')
@section('title')
    My Plan - {{ env('APP_NAME') }} user
@endsection
@push('styles')
@endpush

@section('content')
    <div class="main-content" style="min-height: 842px;">

        <div class="orders-deliver">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <div class="tab-table">
                        <div class="table-responsive">
                            <table class="table rowNumbers">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Plan Name</th>
                                        <th scope="col">Plan Duration</th>
                                        <th scope="col">Plan Date</th>
                                        <th scope="col">Expiry Date</th>
                                        <th scope="col">Plan Price</th>
                                        <th scoope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($my_plans as $my_plan)
                                        <tr>
                                            <td class="table-check"><span><i class="ph ph-check"></i></span></td>
                                            <td>{{ $my_plan->plan->plan_name }}</td>
                                            <td>{{ $my_plan->plan->plan_duration }}</td>
                                            <td>{{ date('d-m-Y', strtotime($my_plan->payment_date)) }}</td>
                                            <td>{{ date('d-m-Y', strtotime($my_plan->expiry_date)) }}</td>
                                            <td>${{ $my_plan->amount }}</td>
                                            <td><span class="badge badge-success">{{ $my_plan->subscription_status }}</span></td> 
                                            <td class="edit text-center">
                                                <div>
                                                    <button type="button" class="btn dropdown-toggle dropdown-toggle-split"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item"
                                                            href="{{ route('my-plan.details', $my_plan->id) }}">View Plan</a>
                                                        <a class="dropdown-item"data-route="{{ route('change.my-plan',$my_plan->id) }}" id="change_plan">Change Plan</a>
                                                        <a class="dropdown-item" data-route="{{ route('cancel.my-plan',$my_plan->id) }}" id="cancel_plan">Cancel Plan</a>
                                                    </div>
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

        </div>
    </div>
@endsection



@push('scripts')

<script>
    $(document).on('click', '#cancel_plan', function(e) {
        swal({
                title: "Are you sure?",
                text: "To cancel this plan",
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

    $(document).on('click', '#change_plan', function(e) {
        swal({
                title: "Are you sure?",
                text: "To change this plan , your previous active plan will be deactivate",
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
