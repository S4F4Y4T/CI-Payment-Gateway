<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Payment extends CI_Controller{ 
     
    function  __construct(){ 
        parent::__construct();
    } 
     
    function index()
    {
        $this->load->view("payment/payment");
    }

}