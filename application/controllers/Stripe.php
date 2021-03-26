<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class Stripe extends CI_Controller {
    
    public function __construct() {
       parent::__construct();
       $this->load->library("session");
       $this->load->helper('url');
       $this->load->config('stripe');  
       $this->load->model('payment'); 
    }
    

    public function index()
    {
        if($this->input->post()){
            require_once('application/libraries/stripe-php/init.php');
    
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
        
        // Get current user ID from the session (optional) 
        $userID = !empty($_SESSION['userID'])?$_SESSION['userID']:1;

        $charge = \Stripe\Charge::create ([
                "amount" => 60*100, //convert cent to dollar
                "currency" => "usd",
                "source" => $this->input->post('stripeToken'),
                "description" => "Products description" 
        ]);
            
        $this->session->set_flashdata('success', 'Payment has been successful.');
            
        // Retrieve charge details 
        $chargeJson = $charge->jsonSerialize(); 
     
        // Check whether the charge is successful 
        if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){ 
            
            // Order details  
            $data['user_id']          = 1; 
            $data['product_id']       = 1; 
            $data['txn_id']           = $chargeJson['balance_transaction']; 
            $data['payment_gross']    = $chargeJson['amount'];  
            $data['currency_code']    = $chargeJson['currency']; 
            $data['status']           = $chargeJson['status'];
            $data['method']           = "stripe"; 

            $inserted = $this->payment->insertTransaction($data); 
            if($inserted){
                redirect('/stripe/success', 'refresh');
            }
        }
           
        }else{
            exit('No direct script access allowed');
        }
    }

    public function success(){
        $this->load->view('payment/stripe/success');
    }
}