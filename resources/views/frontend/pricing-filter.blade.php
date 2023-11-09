<div class="row">
    @foreach($plans as $key=>$plan)
    @php
    $colorClass = ['red', 'purple', 'blue'][$key % 3];
    @endphp
    <!-- single pricing - start -->
    <div class="col-lg-4 col-md-6">
        <div class="pricing-single">
            <div class="pricing-single-wrapper">
                <h3 class="plan c-{{ $colorClass }}">{{ $plan->plan_name }}</h3>
                <h5>{{ $plan->plan_details }}</h5>
                <p class="price c-grey">${{ $plan->plan_price }}<sup>/{{ substr($plan->plan_duration, 0, 2) }}</sup></p>
                @if(Auth::check() && Auth::user()->hasRole('CUSTOMER'))
                {{-- <a href="{{ route('payment.details', encrypt($plan->id)) }}" class="button button-{{ $colorClass }} button-full-width" id="">
                    <span>GET STARTED</span>
                </a> --}}
                <a href="javascript:void(0)" class="button button-{{ $colorClass }} button-full-width" onclick="get_started({{ $plan->id }})">
                    <span>GET STARTED</span>
                </a> 
                @else
                <a href="{{ route('login') }}" class="button button-{{ $colorClass }} button-full-width">
                    <span>GET STARTED</span>
                </a>
                @endif
                <ul>
                    @foreach($plan->Specification as $specification)
                    <li class="available">{{ $specification->specification_name }}</li>
                    @endforeach
                </ul>
                <div class="box bg-{{ $colorClass }}"></div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- single pricing - end -->
</div>

@push('scripts')
<script>
    function get_started(id)
    {
        var plan_id = id;
        $.ajax({
            url: "{{ route('plan.checking') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                "id": plan_id
            },
            success: function(response) {
                if(response.status == 'success')
                {
                    window.location.href = response.url;
                }
            }
        });
    }
</script>

@endpush