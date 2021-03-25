<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Core_model extends CI_Model
{

    private $user_id;
    private $logged_in;
    private $csrf_token;

    public function __construct()
    {

        parent::__construct();

        $this->user_id = $this->session->userdata('user_id');
        $this->logged_in = $this->session->userdata('logged_in');
        $this->csrf_token = $this->session->userdata('csrf_token');

    }

    //check if an user is logged in or not
    public function check_logged_in()
    {
        if ($this->logged_in and !empty($this->csrf_token)) {
            $this->db->where('user_id', $this->user_id);
            $this->db->where('csrf_token', $this->csrf_token);
            if ($this->db->get('user_logins')->num_rows() > 0) {
                return TRUE;
            }
        }
    }

    //verifies if login information is correct
    public function verify_login($user, $pass)
    {
        $encode_password = sha1($pass);

        if (filter_var($user, FILTER_VALIDATE_EMAIL)) {
            $this->db->where('email', $user);
        } else {
            $this->db->where('username', $user);
        }

        $this->db->where('password', $encode_password);

        $verify = $this->db->get('users');

        if ($verify->num_rows() == 1) {

            if (filter_var($user, FILTER_VALIDATE_EMAIL)) {
                $this->db->where('email', $user);
            } else {
                $this->db->where('username', $user);
            }

            $this->db->where('password', $encode_password);
            return $this->db->get('users')->row()->ID;

        } else {
            return FALSE;
        }
    }

    //get any specific setting
    public function getSetting($column)
    {
        if (!empty($column)) {

            $getValue = $this->db->get('settings')->row()->$column;
            return $getValue;

        }
    }

    //get email data of specific action
    public function getEmailData($actionName)
    {
        $actionName = filter($actionName);
        $this->db->where('action', $actionName);
        if ($this->db->get('settings_email')->num_rows() == 1) {
            $this->db->where('action', $actionName);
            $email_id = $this->db->get('settings_email')->row()->email_id;
            $this->db->where('id', $email_id);
            $data = $this->db->get('smtp_emails')->result();
            return $data[0];
        }
    }


}