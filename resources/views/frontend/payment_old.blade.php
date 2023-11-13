@extends('frontend.layouts.master')
@section('meta_title')
@endsection
@section('title')
    Payment
@endsection
@push('styles')

@endpush

@section('content')
  <!-- header - start -->
  <div class="header">
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="header-content t-center">
                        <h1 class="m-horz-auto heading-width-res-full heading-width-83"></h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header - end -->

<!-- faq section - start -->
<div class="faq-section">
<div class="faq-section-wrapper pt-0 pb-0 inner-faq">
    <div class="container">
        <div class="row gx-5">
            <!-- form - start -->
            <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-12 offset-1">
                <div class="contact-form position-relative">
                    <div class="contact-form-wrapper bg-light">
                        <h3 class="ls-1 t-center m-horz-auto heading-width-res-full heading-width-92">Please complete the payment</h3>
                            <form role="form" action="{{ route('payment.submit') }}" method="post" class="require-validation"
                            data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                            @csrf
                            <input type="hidden" name="plan_id" value="{{ $plan_details->id }}">
                            <input type="hidden" name="total_amount" value="{{ $plan_details->plan_price }}">
                            <div class="form-floating">
                                <input type="text" class="form-control form-control--sm card-number"
                                name="card-number" id="card-number" placeholder="xxxx xxxx xxxx xxxx"
                                autocomplete='off' size='20'>
                                <label for="nameField">Card Number</label>
                            </div>
                            <div class="form-floating">
                                <select class="form-control form-control--sm card-expiry-month"
                                name="card-expiry-month" id="card-expiry-month">
                                <option selected="" value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                                <label for="emailField">Expiry Month</label>
                            </div>
                            <div class="form-floating">
                                <input class="form-control form-control--sm card-expiry-year"
                                name="card-expiry-year" placeholder='YYYY'
                                id="card-expiry-year">
                                <label for="messageField">Expiry Year</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control form-control--sm card-cvv" id="card-cvv" name="card-cvv" placeholder='ex. 311'>
                                <label for="messageField">CVV code</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control "
                                name="holder_name" >
                                <label for="nameField">Card Holder name</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control "
                                name="billing_address" >
                                <label for="nameField">Billing address</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control "
                                name="city" >
                                <label for="nameField">City</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control "
                                name="state" >
                                <label for="nameField">State</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control "
                                name="zipcode" >
                                <label for="nameField">Zip code</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control "
                                name="country" >
                                <label for="nameField">Country</label>
                            </div>

                           
                            <div class="form-submit mt-3">
                                <button type="submit" class="button button-full-width button-red">
                                    <span>Subscribe</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="box-small box-top-left bg-red wow pulse" data-wow-delay="0.4s"
                        data-wow-iteration="infinite"></div>
                </div>
            </div>
            
            
        </div>

@endsection

@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">
        $(function() {

            /*------------------------------------------
            --------------------------------------------
            Stripe Payment Code
            --------------------------------------------
            --------------------------------------------*/

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
                
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=text]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvv').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            

           

            /*------------------------------------------
            --------------------------------------------
            Stripe Response Handler
            --------------------------------------------
            --------------------------------------------*/
            function stripeResponseHandler(status, response) {
                
               
                if (response.error) {
                    // console.log(response.error);
                    toastr.error(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
    {{-- <script>
        $('.require-validation').validate({
            rules: {
                'card-number': {
                    required: true,
                    minlength: 19,
                    maxlength: 19
                },
                'card-cvv': {
                    required: true,
                    number: true,
                    minlength: 3,
                    maxlength: 4,

                },
                'card-expiry-month': {
                    required: true,
                    // minlength: 2,
                    // maxlength: 2
                },
                'card-expiry-year': {
                    required: true,
                    number: true,
                    minlength: 4,
                    maxlength: 4,
                },

                
            },


           
        });
    </script> --}}
    <script>
        $('#card-number').on('input propertychange paste', function() {
            var value = $('#card-number').val();
            var formattedValue = formatCardNumber(value);
            $('#card-number').val(formattedValue);
        });

        function formatCardNumber(value) {
            var value = value.replace(/\D/g, '');
            var formattedValue;
            var maxLength;
            // american express, 15 digits
            if ((/^3[47]\d{0,13}$/).test(value)) {
                formattedValue = value.replace(/(\d{4})/, '$1 ').replace(/(\d{4}) (\d{6})/, '$1 $2 ');
                maxLength = 17;
            } else if ((/^3(?:0[0-5]|[68]\d)\d{0,11}$/).test(value)) { // diner's club, 14 digits
                formattedValue = value.replace(/(\d{4})/, '$1 ').replace(/(\d{4}) (\d{6})/, '$1 $2 ');
                maxLength = 16;
            } else if ((/^\d{0,16}$/).test(value)) { // regular cc number, 16 digits
                formattedValue = value.replace(/(\d{4})/, '$1 ').replace(/(\d{4}) (\d{4})/, '$1 $2 ').replace(
                    /(\d{4}) (\d{4}) (\d{4})/, '$1 $2 $3 ');
                maxLength = 19;
            }

            $('#card-number').attr('maxlength', maxLength);
            return formattedValue;
        }
    </script>
@endpush
