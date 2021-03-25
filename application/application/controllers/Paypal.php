<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Paypal extends CI_Controller{ 
     
     function  __construct(){ 
        parent::__construct(); 
         
        // Load paypal library 
        $this->load->library('paypal_lib'); 
        $this->theme = $this->core_model->getSetting('theme');
         
        // Load product model 
        //$this->load->model('product'); 
         
        // Load payment model 
        $this->load->model('payment'); 
     } 
      
    function success(){ 
        
        $paypalInfo = $this->input->get();
        
        $data['payer_name'] = $paypalInfo['payer_name'];
        $data['payer_email'] = $paypalInfo['payer_email'];
         
        // Pass the transaction data to view 
        //$data['product'] = $productData; 

        //-----------Start view handler-----------\\

        //Load Head Styles
        $extra_styles = array();
        $head_styles = generateGlobalStyleSheet($this->theme, $extra_styles);
        //End Loading Head Styles

        $head_scripts = array();

        //Load page Scripts
        $extra_scripts = array();
        $page_scripts = generateGlobalScripts($this->theme, $extra_scripts);
        //End Loading Page Scripts


        $view_data = array();

        $data = array(

            'theme' => $this->theme,
            'brand_logo' => $this->core_model->getSetting('brand_logo'),
            'page_title' => 'Dashboard',

            'head_data' => array(
                'meta_description' => 'Admin Panel Dashboard of BookingStack',
                'headStyles' => $head_styles,
                'headScripts' => $head_scripts
            ),

            'aside_data' => array(
                'parent_page' => '',
                'child_page' => ''
            ),

            'page_scripts' => $page_scripts,

            'view' => 'payment/paypal/success',
            'view_data' => $view_data

        );

        $this->load->view($this->theme . '/template', $data);
    } 
      
     function cancel(){ 
         //-----------Start view handler-----------\\

        //Load Head Styles
        $extra_styles = array();
        $head_styles = generateGlobalStyleSheet($this->theme, $extra_styles);
        //End Loading Head Styles

        $head_scripts = array();

        //Load page Scripts
        $extra_scripts = array();
        $page_scripts = generateGlobalScripts($this->theme, $extra_scripts);
        //End Loading Page Scripts


        $view_data = array();

        $data = array(

            'theme' => $this->theme,
            'brand_logo' => $this->core_model->getSetting('brand_logo'),
            'page_title' => 'Dashboard',

            'head_data' => array(
                'meta_description' => 'Admin Panel Dashboard of BookingStack',
                'headStyles' => $head_styles,
                'headScripts' => $head_scripts
            ),

            'aside_data' => array(
                'parent_page' => '',
                'child_page' => ''
            ),

            'page_scripts' => $page_scripts,

            'view' => 'payment/paypal/cancel',
            'view_data' => $view_data

        );

        $this->load->view($this->theme . '/template', $data);
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
                    $data['payer_name']    = trim($paypalInfo["first_name"].' '.$paypalInfo["last_name"], ' '); 
                    $data['payer_email']    = $paypalInfo["payer_email"]; 
                    $data['status'] = $paypalInfo["payment_status"];
                    $data['method'] = "paypal"; 
     
                    $this->payment->insertTransaction($data); 
                } 
            } 
        } 
    } 
}