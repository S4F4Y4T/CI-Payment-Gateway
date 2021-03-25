<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Payment extends CI_Controller{ 
     
    function  __construct(){ 
        parent::__construct(); 
         
        // Load paypal library 
        $this->load->library('paypal_lib'); 
         
    } 
     
    function index(){ 
        $this->config->load('stripe');
        $this->load->view("payment/payment");

    } 
     
}