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
            //get user last payment deatils
            // $last_payment = Payment::where('user_id',Auth::user()->id)->orderBy('id','desc')->first();
            // //check today date is greater than expiry date
            // if($last_payment->expiry_date > date('Y-m-d')){
            //     return redirect()->route('my-plan.list')->with('message','You have already subscribed to a plan.');
            // }
             
            $plan_id = decrypt($payment);
            $plan_details = Plan::find($plan_id);
            Session::forget('change-plan');
            return view('frontend.payment',compact('plan_details'));
        } else {
            return redirect()->route('login');
        }

    }

    public function paymentSubmit(Request $request)
    {
        $data = $request->all();
        $stripe = Stripe::setApiKey(env('STRIPE_SECRET')); 
                      
                //we have to create a customer for payment
                 $customer = $stripe->customers()->create(array(
                    'address' => [
                        'line1' => $data['billing_address'],
                        'postal_code' => $data['zipcode'],
                        'state' => $data['state'],
                        'country' => $data['country'],
                    ],
                    "email" => 'shreeja@yopmail.com',
                    "name" => $data['holder_name'],
                    "source" => $data['stripeToken']
                ));

             
                // create a charge for created customer 
         
                $charge = $stripe->charges()->create([
                    "amount" => $data['total_amount'],
                    "currency" => 'USD',
                    "customer" => $customer['id'],
                    "description" => "Payment for product order",
                    'shipping' => [
                        'name' => $data['holder_name'],
                        'address' => [
                            'line1' => $data['billing_address'],
                            'postal_code' => $data['zipcode'],
                            'state' => $data['state'],
                            'country' => $data['country'],
                        ],
                    ],
                ]);



                $order_number = mt_rand(100000000, 999999999);
                if ($charge['status'] == 'succeeded') {
                    // token will be deducted from seller account
                     
                }
                // payment method save
                
                $payment = new Payment();
                $payment->user_id = Auth::user()->id;
                $payment->plan_id = $data['plan_id'];
                $payment->payment_id = $charge['id'];
                $payment->amount = $data['total_amount'];

                $plan_duration = Plan::where('id',$data['plan_id'])->first();
                
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

                $payment_id = DB::getPdo()->lastInsertId();
                Session::put('order_id', $payment_id);

                // deactive previous active plan where expiry date is greater than today date
                $get_active_plan = Payment::where('user_id',Auth::user()->id)->where('subscription_status','Active')->where('expiry_date','>',date('Y-m-d'))->first();
                
                return redirect()->route('payment.success')->with('success', 'Order has been placed successfully');
            
    }

    public function paymentSuccess()
    {
        if (Session::has('order_id')) {
            return redirect()->route('my-plan.list')->with('message','Payment Successfull');
        } else {
            return redirect()->route('pricing');
        }
    }
}
