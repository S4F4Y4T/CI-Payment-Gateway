<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Services extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->theme = $this->core_model->getSetting('theme');
    }

    public function index()
    {
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

            'view' => 'admin-panel/service/service_listing',
            'view_data' => $view_data

        );

        $this->load->view($this->theme . '/template', $data);
    }

    public function add_service()
    {
        //-----------Start view handler-----------\\

        //Load Head Styles
        $extra_styles = array(site_url() . 'assets/' . $this->theme . '/dist/assets/css/pages/wizard/wizard-4.css');
        $head_styles = generateGlobalStyleSheet($this->theme, $extra_styles);
        //End Loading Head Styles

        $head_scripts = array();

        //Load page Scripts
        $extra_scripts = array(
            site_url() . 'assets/' . $this->theme . '/dist/assets/js/pages/custom/wizard/wizard-4.js',
            site_url() . 'assets/' . $this->theme . '/dist/assets/js/pages/custom/service/service_add.js?ver=' . time()
        );
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

            'view' => 'admin-panel/service/add_service',
            'view_data' => $view_data

        );

        $this->load->view($this->theme . '/template', $data);

    }

    public function service_addons()
    {

    }

    public function pricing_methods()
    {

    }

    public function pricing_method_units()
    {

    }
}