<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    //get user status
    public function get_user_status($email, $pass)
    {
        $encode_password = sha1($pass);

        $this->db->where('email', $email);
        $this->db->where('password', $encode_password);

        $verify = $this->db->get('users');
        return $verify->row()->status;
    }

    //get user status
    public function get_user_role($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('users')->row()->role;
    }

    //get user data by user ID
    public function getUserData($id, $column)
    {
        $id = filter($id);
        $this->db->where('id', $id);
        if ($this->db->get('users')->num_rows() == 1) {
            $this->db->where('id', $id);
            return $this->db->get('users')->row()->$column;
        }
    }


}

?>