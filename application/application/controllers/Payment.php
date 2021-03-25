<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Payment extends CI_Controller{ 
     
    function  __construct(){ 
        parent::__construct(); 
         
        // Load paypal library 
        $this->load->library('paypal_lib'); 
        $this->theme = $this->core_model->getSetting('theme');
         
        // Load product model 
        //$this->load->model('product'); 
    } 
     
    function index(){ 
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

            'view' => 'payment/paypal/payment',
            'view_data' => $view_data

        );

        $this->load->view($this->theme . '/template', $data);

    } 
     
    function buy(){ 
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
        $this->paypal_lib->add_field('item_name', 'Bookingstack'); 
        $this->paypal_lib->add_field('custom', 1); 
        $this->paypal_lib->add_field('item_number',  1); 
        $this->paypal_lib->add_field('amount',  60); 
         
        // Render paypal form 
        $this->paypal_lib->paypal_auto_form(); 
    } 
}