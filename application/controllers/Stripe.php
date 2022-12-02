<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class Stripe extends CI_Controller {
    
    public function __construct() {
       parent::__construct();
    }
    

    public function index()
    {
        if($this->input->post()){

            require_once('application/libraries/stripe-php/init.php');
    
            \Stripe\Stripe::setApiKey($this->CI->config->item('stripe_secret_key'));

            $charge = \Stripe\Charge::create ([
                    "amount" => "AMOUNT" * $this->CI->config->item('payment_amount'), //convert cent to dollar
                    "currency" => "usd",
                    "source" => $this->input->post('stripeToken'),
            ]);

            // Retrieve charge details
            $chargeJson = $charge->jsonSerialize();

            // Check whether the charge is successful
            if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){

                return ['status' => 1, 'message' => 'Payment success'];

            }
           
        }else{
            exit('No direct script access allowed');
        }
    }

}
