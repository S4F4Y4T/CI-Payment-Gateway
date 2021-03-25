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
        
        echo "Sauwa";

    }

}
