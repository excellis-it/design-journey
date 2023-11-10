<div class="row">
    @foreach ($plans as $key => $plan)
        @php
            $colorClass = ['red', 'purple', 'blue'][$key % 3];
        @endphp
        <!-- single pricing - start -->
        <div class="col-lg-4 col-md-6">
            <div class="pricing-single">
                <div class="pricing-single-wrapper">
                    <h3 class="plan c-{{ $colorClass }}">{{ $plan->plan_name }}</h3>
                    <h5>{{ $plan->plan_details }}</h5>
                    <p class="price c-grey">${{ $plan->plan_price }}<sup>/{{ substr($plan->plan_duration, 0, 2) }}</sup>
                    </p>
                    @if (Auth::check() && Auth::user()->hasRole('CUSTOMER'))
                        
                        {{-- get session change-plan data --}}
                        @php
                            $session_data = Session::get('change-plan');
                            
                        @endphp
                        {{-- check session data --}}
                        @if ($session_data == 'ok' || $session_data == null && $user_plan_count <= 0)
                            <a href="{{ route('payment.details', encrypt($plan->id)) }}"
                                class="button button-{{ $colorClass }} button-full-width" id="">
                                <span>GET STARTED</span>
                            </a>
                        @elseif($session_data == null && $user_plan_count > 0)

                            <a href="javascript:void(0)" class="button button-{{ $colorClass }} button-full-width"
                                onclick="get_started({{ $plan->id }})">
                                <span>GET STARTED</span>
                            </a>
                        
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="button button-{{ $colorClass }} button-full-width">
                            <span>GET STARTED</span>
                        </a>
                    @endif
                    <ul>
                        @foreach ($plan->Specification as $specification)
                            <li class="available">{{ $specification->specification_name }}</li>
                        @endforeach
                    </ul>
                    <div class="box bg-{{ $colorClass }}"></div>
                </div>
            </div>
        </div>


        {{-- modal open --}}
        <div class="modal fade" id="exampleModal_{{$plan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center p-5">
                        {{-- <h2>Advanced</h2> --}}
                        <p>You already have an active plan.Do you want to change this plan?</p>
                        <div class="d-flex align-items-center mt-3">
                            <a href="{{ route('payment.details', encrypt($plan->id)) }}"
                                class="yes_btn button button-purple button-full-width"><span>OK</span></a>
                            <button type="button"
                                class="yes_btn  button button-red button-full-width" data-bs-dismiss="modal" aria-label="Close"><span>CANCEL</span></button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        {{-- modal close --}}
    @endforeach
    <!-- single pricing - end -->
</div>

@push('scripts')
    <script>
        function get_started(id) {
            $('#exampleModal_'+id).modal('show');
        }
    </script>
@endpush
