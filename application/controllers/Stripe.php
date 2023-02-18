<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class Stripe extends CI_Controller {
    
    public function __construct() {
       parent::__construct();
    }

    public function index()
    {
        $data = ['status' => 0, 'message' => 'An error occurred'];

        if($this->input->post()){

            require_once('application/libraries/stripe-php/init.php');
    
            \Stripe\Stripe::setApiKey($this->config->item('stripe_secret_key'));

            $charge = \Stripe\Charge::create ([
                    "amount" => $this->config->item('payment_amount') * 100, //convert cent to dollar
                    "currency" => "usd",
                    "source" => $this->input->post('stripeToken'),
            ]);

            // Retrieve charge details
            $chargeJson = $charge->jsonSerialize();

            // Check whether the charge is successful
            if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){

                $data = array(
                    'txn_id' => $chargeJson['balance_transaction'],
                    'amount' => $chargeJson['amount'] / 100,
                    'currency' => $chargeJson['currency'],
                    'method' => 'stripe',
                    'status' => 'Completed',
                    'date_time' => date("Y-m-d H:i:s")
                );

                $transaction = $this->db->insert("transactions", $data);

                if($transaction){
                    $data = ['status' => 1, 'message' => 'Payment success'];
                }

            }
           
        }

        session_write_close();
        echo json_encode($data);
        exit();
    }

}
