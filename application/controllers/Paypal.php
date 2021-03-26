<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Paypal extends CI_Controller{ 
     
     function  __construct(){ 
        parent::__construct(); 
         
        // Load paypal library 
        $this->load->library('paypal_lib'); 
        
        $this->load->model('payment'); 
     } 

    function index(){ 
        // Set variables for paypal form 
        $returnURL = base_url().'paypal/success'; //payment success url 
        $cancelURL = base_url().'paypal/cancel'; //payment cancel url 
        $notifyURL = base_url().'paypal/ipn'; //ipn url 
         
        // Get current user ID from the session (optional) 
        $userID = !empty($_SESSION['userID'])?$_SESSION['userID']:1; 
         
        // Add fields to paypal form 
        $this->paypal_lib->add_field('return', $returnURL); 
        $this->paypal_lib->add_field('cancel_return', $cancelURL); 
        $this->paypal_lib->add_field('notify_url', $notifyURL); 
        $this->paypal_lib->add_field('item_name', 'Products'); 
        $this->paypal_lib->add_field('custom', 1); 
        $this->paypal_lib->add_field('item_number',  1); 
        $this->paypal_lib->add_field('amount',  60); 
         
        // Render paypal form 
        $this->paypal_lib->paypal_auto_form(); 
    } 
      
    function success(){ 
        
        $paypalInfo = $this->input->get();
        
        $data['payer_name'] = $paypalInfo['payer_name'];
        $data['payer_email'] = $paypalInfo['payer_email'];
         
        // Pass the transaction data to view 
        //$data['product'] = $productData; 

        $this->load->view('payment/paypal/success', $data);
    } 
      
     function cancel(){ 
        $this->load->view('payment/paypal/cancel', $data);
     } 
      
     function ipn(){ 
        // Retrieve transaction data from PayPal IPN POST 
        $paypalInfo = $this->input->post(); 
         
        if(!empty($paypalInfo)){ 
            // Validate and get the ipn response 
            $ipnCheck = $this->paypal_lib->validate_ipn($paypalInfo); 
 
            // Check whether the transaction is valid 
            if($ipnCheck){ 
                // Check whether the transaction data is exists 
                $prevPayment = $this->payment->getPayment(array('txn_id' => $paypalInfo["txn_id"])); 
                if(!$prevPayment){ 
                    // Insert the transaction data in the database 
                    $data['user_id']    = $paypalInfo["custom"]; 
                    $data['product_id']    = $paypalInfo["item_number"]; 
                    $data['txn_id']    = $paypalInfo["txn_id"]; 
                    $data['payment_gross']    = $paypalInfo["mc_gross"]; 
                    $data['currency_code']    = $paypalInfo["mc_currency"]; 
                    $data['status'] = $paypalInfo["payment_status"];
                    $data['method'] = "paypal"; 
     
                    $this->payment->insertTransaction($data); 
                } 
            } 
        } 
    } 
}