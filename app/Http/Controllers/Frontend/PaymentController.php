<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Plan;
use App\Models\Payment;
use Stripe;
use Auth;
use Session;
use DB;
use Carbon\Carbon;

class PaymentController extends Controller
{
    //

    public function payment($payment)
    {
        
        
        if (Auth::check() && Auth::user()->hasRole('CUSTOMER')) {
            
            $plan_id = decrypt($payment);
            $plan_details = Plan::find($plan_id);
            Session::forget('change-plan');

            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $redirectUrl = route('payment.success').'?session_id={CHECKOUT_SESSION_ID}';
            $response = $stripe->checkout->sessions->create([
                'success_url' => $redirectUrl,
                'customer_email' => Auth::user()->email,
                'payment_method_types' => ['link','card'],
                'line_items' => [
                    [
                        'price_data' => [
                            'product_data' => [
                                'name' => $plan_details->plan_name,
                            ],
                            'unit_amount' => $plan_details->plan_price * 100,
                            'currency' => 'USD',
                        ],
                        'quantity' => 1,
                        
                    ],
                ],

                'mode' => 'payment',
                'allow_promotion_codes' => true,
            ]);


            $orderDetail = [
                'payment_details' => $response,
                'plan_details' => $plan_details,
                // ... other variables
            ];
            
            Session::put('order_detail', $orderDetail);

            // $payment_id = DB::getPdo()->lastInsertId();
            // Session::put('order_detail', $response);

           

            return redirect($response['url']);
        } else {
            return redirect()->back()->with('error','Something went wrong');
        }

    }


    public function paymentSuccess(Request $request)
    {
        //session order_id
        $order_detail = Session::get('order_detail');
        $paymentDetails = $order_detail['payment_details'];
        $plan_details = $order_detail['plan_details'];
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $response = $stripe->checkout->sessions->retrieve($request->session_id);


            $payment = new Payment();
            $payment->user_id = Auth::user()->id;
            $payment->plan_id = $plan_details['id'];
            $payment->payment_id = $paymentDetails['id'];
            $payment->amount = $plan_details['plan_price'];

            $plan_duration = Plan::where('id',$payment->plan_id)->first();
            
            $current = date('Y-m-d');
            $payment->payment_date = $current;
            if($plan_duration->plan_duration == 'monthly'){
                $expiry_date = date('Y-m-d', strtotime('+' . 1 . 'months'));  
            }else if($plan_duration->plan_duration == 'yearly'){
                $expiry_date = date('Y-m-d', strtotime('+' . 12 . 'months'));  
            }else{
                $expiry_date = date('Y-m-d', strtotime('+' . 3 . 'months'));  
            }
            $payment->expiry_date = $expiry_date; 
            $payment->save();

             // deactive previous active plan where expiry date is greater than today date
             $get_active_plan = Payment::where('user_id',Auth::user()->id)->where('subscription_status','Active')->where('payment_id','!=',$payment->payment_id)->first();
             if(!empty($get_active_plan)){
                 $current_date = date('Y-m-d');
                 if($get_active_plan->expiry_date > $current_date){
                     $get_active_plan->subscription_status = 'Deactive';
                     $get_active_plan->save();
                 }
             }

        return redirect()->route('my-plan.list')->with('message','Payment Successfull');
    }
}
