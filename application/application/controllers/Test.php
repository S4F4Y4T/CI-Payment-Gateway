<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

    public $theme;

    public function __construct()
    {
        parent::__construct();
        $this->theme = $this->core_model->getSetting('theme');
    }

    public function index()
    {
        $emailOrUsername = filter($this->input->post('user'));

        $pass = $this->input->post('password');

        $user_id = $this->core_model->verify_login($emailOrUsername, $pass);

        echo $user_id;
    }

}