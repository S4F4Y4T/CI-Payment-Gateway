<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Paypal extends CI_Controller{ 
     
     function  __construct(){ 
        parent::__construct(); 
        
        $paypalConfig = [
            'sandbox' => $this->CI->config->item('sandbox') ,
            'business' => $this->CI->config->item('business_email') ,
            'paypal_lib_currency_code' => $this->CI->config->item('paypal_lib_currency_code') ,
            'paypal_lib_button_path' => $this->CI->config->item('paypal_lib_button_path'),
            'paypal_lib_ipn_log' => $this->CI->config->item('paypal_lib_ipn_log'),
            'paypal_lib_ipn_log_file' => $this->CI->config->item('paypal_lib_ipn_log_file')
        ];
         
        // Load paypal library 
        $this->load->library('paypal_lib', $paypalConfig);
     } 

    function index(){ 
        // Set variables for paypal form 
        $returnURL = base_url().'paypal/success'; //payment success url 
        $cancelURL = base_url().'paypal/cancel'; //payment cancel url 
        $notifyURL = base_url().'paypal/ipn'; //ipn url
         
        // Add fields to paypal form 
        $this->paypal_lib->add_field('return', $returnURL); 
        $this->paypal_lib->add_field('cancel_return', $cancelURL); 
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('amount',  $this->CI->config->item('payment_amount'));
         
        // Render paypal form 
        $this->paypal_lib->paypal_auto_form(); 
    } 
      
    public function success()
    {
        // Retrieve transaction data from PayPal IPN POST
        $paypalInfo = $this->input->post();

        // Validate and get the ipn response
        $ipnCheck = $this->paypal_lib->validate_ipn($paypalInfo);

        // Check whether the transaction data is exists
        if ($ipnCheck) {

            $transactions_id = $this->validate_txn($paypalInfo['txn_id']);

            if ($transactions_id) {

                if ($paypalInfo["payment_status"] === "Completed" || $paypalInfo["payment_status"] === "Pending") {

                    $data = ["status" => 1, "message" => "Payment succeed"];

                } else {
                    $data = ["status" => 0, "message" => "Payment status failed"];
                }

            } else {
                $data = ["status" => 0, "message" => "Txn Validation Failed", 'data' => $paypalInfo['txn_id']];
            }



        } else {
            $data = ["status" => 0, "message" => "Ipn failed"];
        }

        return $data;
    } 
      
     public function cancel()
     {
         echo "<h1>Payment Cancel</h1>";
     } 
      
     function ipn()
     {
        // Retrieve transaction data from PayPal IPN POST 
        $paypalInfo = $this->input->post(); 
         
        if(!empty($paypalInfo)){ 
            // Validate and get the ipn response 
            $ipnCheck = $this->paypal_lib->validate_ipn($paypalInfo); 
 
            // Check whether the transaction is valid 
            if($ipnCheck){ 
                // Check whether the transaction id already exists in your db 
                //$prevPayment = $this->payment->getPayment(array('txn_id' => $paypalInfo["txn_id"])); 
                if(!$prevPayment){ 
                    //add the transaction record into your db here
                } 
            } 
        } 
    }

    public function validate_txn($txn_id = '')
    {
        if (!empty($txn_id)) {

            $txn_result = FALSE;
            $loop_run = 0;
            $ipnValidated = true;

            while (!$txn_result) {

                $loop_run += 1;

                //validate txn here
                $check_transaction = $this->core_model->fetch_data('transactions', ['txn_id' => $txn_id]);

                if ($loop_run > 100) {
                    $ipnValidated = false;
                    $txn_result = TRUE;
                }

                if ($check_transaction) {
                    $txn_result = TRUE;
                }

            }

            if ($txn_result && $ipnValidated) {
                return $check_transaction[0]->id;
            }

        }

        return false;

    }
}
