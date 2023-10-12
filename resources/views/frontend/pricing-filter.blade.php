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
                <p class="price c-grey">${{ $plan->plan_price }}<sup>/mo</sup></p>
                <a href="#" class="button button-{{ $colorClass }} button-full-width">
                    <span>GET STARTED</span>
                </a>
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