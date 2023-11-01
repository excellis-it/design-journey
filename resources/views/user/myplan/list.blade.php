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

                                            <td class="edit text-center">
                                                <div>
                                                    <button type="button" class="btn dropdown-toggle dropdown-toggle-split"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item"
                                                            href="{{ route('my-plan.details', $my_plan->id) }}">View</a>

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
@endpush
