<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public $theme;

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

            'view' => 'front-end/index',
            'view_data' => $view_data

        );

        $this->load->view($this->theme . '/template', $data);
    }

    public function enter()
    {

        if ($this->core_model->check_logged_in()) {

            redirect(site_url("dashboard"));
            exit();

        }

        $data = array(
            'theme' => $this->theme,
            'brand_name' => $this->core_model->getSetting('brand_name'),
            'brand_logo' => $this->core_model->getSetting('brand_logo'),
            'enter_page_bg' => $this->core_model->getSetting('enter_page_bg')
        );

        $this->load->view($this->theme . '/front-end/enter', $data);

    }
}
