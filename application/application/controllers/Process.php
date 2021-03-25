<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Process extends CI_Controller
{

    public $theme;

    public function __construct()
    {
        parent::__construct();
        $this->theme = $this->core_model->getSetting('theme');
    }

    public function index()
    {
        redirect(site_url("enter"));
        exit();
    }

    public function login()
    {

        if ($this->core_model->check_logged_in()) {

            redirect(site_url("dashboard"));
            exit();

        }

        $data = array();

        $this->load->library('form_validation');

        $this->form_validation->set_rules('user', 'Email or Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'min_length[8]|max_length[40]|required');

        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'status' => 0,
                'message' => validation_errors()
            );

        } else {

            if ($this->session->userdata('ctime')) {

                //process calculation of total passed minutes
                $atime = $this->session->userdata('atime');
                $edarr = explode(" ", $atime);

                $tdate = date("Y-m-d") . " " . $edarr[0] . ":" . $edarr[1] . ":00";
                $tdate1 = date("Y-m-d") . " " . date("h:i") . ":00";

                $start_date = new DateTime($tdate);
                $since_start = $start_date->diff(new DateTime($tdate1));
                $minutes_passed = (int)$since_start->i;
                //End processing calculation of total passed minutes

                $minutes_left = 5 - $minutes_passed;

                if ($minutes_passed <= 5) {
                    $data = array(
                        'status' => 0,
                        'message' => "Try again " . $minutes_left . " minutes later"
                    );
                } else {
                    $this->session->unset_userdata('ctime');
                    $this->session->unset_userdata('atime');
                    $this->session->unset_userdata('etime');
                    $this->session->set_userdata('attempt', 0);
                }

            }

            $emailOrUsername = filter($this->input->post('user'));

            $pass = $this->input->post('password');

            $user_id = $this->core_model->verify_login($emailOrUsername, $pass);

            $this->load->model('user_model');

            if ($user_id !== false) {

                if ($this->user_model->getUserData($user_id, 'status') == 0) {

                    $data = array(
                        'status' => 0,
                        'message' => "Your account is not activated. Please verify your email to activate your account or contact us"
                    );

                } else {

                    $role = $this->user_model->getUserData($user_id, 'role');

                    $token = csrf_token($user_id);

                    //assign session datas
                    $sessiondata = array(
                        'user_email' => $this->user_model->getUserData($user_id, 'email'),
                        'user_name' => $this->user_model->getUserData($user_id, 'username'),
                        'user_id' => $user_id,
                        'logged_in' => "TRUE",
                        'csrf_token' => $token,
                        'role' => $role,
                        'logged_in_time' => date("h:i A")
                    );
                    $this->session->set_userdata($sessiondata);

                    $TwoStepVerification = $this->user_model->getUserData($user_id, 'two_step_verification');

                    //checks if two step verification is activated
                    if ($TwoStepVerification == 1) {
                        //process user login if two step verification is on

                        //Process two step verification email\\
                        $this->load->library('user_agent');
                        if ($this->agent->is_browser()) {
                            $agent = $this->agent->browser() . ' ' . $this->agent->version();
                        } elseif ($this->agent->is_robot()) {
                            $agent = $this->agent->robot();
                        } elseif ($this->agent->is_mobile()) {
                            $agent = $this->agent->mobile();
                        } else {
                            $agent = 'Unidentified User Agent';
                        }
                        $platform = $this->agent->platform();

                        $this->load->helper('string');
                        $verification_code = random_string('numeric', 6);

                        $email = $this->user_model->getUserData($user_id, 'email');
                        $name = $this->user_model->getUserData($user_id, 'name');

                        $site_name = $this->core_model->getSetting('brand_name');
                        $brand_logo = $this->core_model->getSetting('brand_logo');
                        $theme = $this->core_model->getSetting('theme');

                        //Start getting SMTP authentication data
                        $EmailData = $this->core_model->getEmailData('two_step_verification');

                        $smtp_port = $EmailData->port;

                        if ($smtp_port == "587") {
                            $smtp_crypto = "tls";
                        } else {
                            $smtp_crypto = "ssl";
                        }

                        $smtp_host = $EmailData->host;
                        $smtp_user = $EmailData->username;
                        $smtp_from_address = $EmailData->from_address;
                        $smtp_pass = $EmailData->password;
                        $smtp_name = $EmailData->name;
                        //End getting SMTP authentication data

                        //Start deleting old TSV tokens
                        $this->db->where('user_id', $user_id);
                        if ($this->db->get('two_step_login_tokens')->num_rows() > 0) {
                            $this->db->where('user_id', $user_id);
                            $this->db->delete('two_step_login_tokens');
                        }
                        //End deleting old TSV tokens

                        $tsv_token_data = array(
                            'user_id' => $user_id,
                            'csrf_token' => $token,
                            'code' => $verification_code,
                        );

                        //End processing two step verification email\\

                        if ($this->db->insert('two_step_login_tokens', $tsv_token_data)) {

                            $html_email_data = array(
                                'user_name' => $name,
                                'site_name' => $site_name,
                                'site_url' => site_url(),
                                'platform' => $platform,
                                'agent' => $agent,
                                'location' => ipToLocation(),
                                'verification_code' => $verification_code,
                                'site_logo' => site_url() . 'assets/' . $theme . '/dist/assets/media/logos/' . $brand_logo,
                                'use_logo' => 1
                            );

                            $this->load->library('email');
                            $config = array(
                                'protocol' => 'smtp',
                                'smtp_crypto' => $smtp_crypto,
                                'smtp_host' => "$smtp_host",
                                'smtp_port' => $smtp_port,
                                'smtp_user' => "$smtp_user",
                                'smtp_pass' => "$smtp_pass",
                                'mailtype' => 'html',
                                'charset' => 'utf-8'
                            );
                            $this->email->initialize($config);
                            $this->email->set_mailtype("html");
                            $this->email->set_newline("\r\n");
                            $this->email->to("$email");
                            $this->email->from("$smtp_from_address", "$smtp_name");
                            $this->email->reply_to("$smtp_from_address", "$smtp_name");
                            $this->email->subject("$site_name - Two step login verification code");
                            $this->email->message($this->load->view($theme . '/email/two_step_verification', $html_email_data, TRUE));

                            if (!$this->email->send()) {

                                //echo $this->email->print_debugger();

                                $data = array(
                                    'status' => 0,
                                    'tsv_form' => 0,
                                    'message' => "An error occurred while processing your two step login verification request"
                                );

                            } else {

                                $data = array(
                                    'status' => 1,
                                    'tsv_form' => 1,
                                    'message' => 'We have sent an email to <b>' . $email . '</b> with a 6 digit verification code. Get the code from your email and continue to account login'
                                );

                                $this->session->set_userdata('tsv_session', 'true');

                            }
                        }

                    } else {

                        //process user login if two step verification is off
                        $login_data = array(
                            'user_id' => $user_id,
                            'csrf_token' => $token,
                            'logged_in_time' => date("h:i A")
                        );

                        if ($this->db->insert('user_logins', $login_data)) {

                            $data = array(
                                'status' => 1,
                                'tsv_form' => 0,
                                'message' => "Account Sign In successful"
                            );

                        }

                    }

                }
            } else {

                $pdata = array(
                    'attempt' => $this->session->userdata('attempt') + 1
                );

                $this->session->set_userdata($pdata);

                $attempts = $this->session->userdata('attempt');

                $remaining = (3 - $attempts);

                if ($attempts > 2 and $attempts < 4) {

                    $this->session->set_userdata("atime", date('h i'));

                    $date = new DateTime('h i');
                    $date->modify('+5 minute');
                    $etime = $date->format('h i');

                    $this->session->set_userdata("etime", $etime);
                    $this->session->set_userdata("ctime", "true");
                }

                if (!$this->session->userdata('ctime')) {

                    $data = array(
                        'status' => 0,
                        'tsv_form' => 0,
                        'message' => 'Incorrect login information. <span style="color: red">You have ' . $remaining . ' attempts remaining</span>'
                    );
                }

            }
        }

        session_write_close();
        echo json_encode($data);
        exit();

    }

    public function verify_tsv_code(){

        $data = array('status' => 0, 'message' => 'Invalid request');

        if($this->session->userdata('tsv_session') == "true"){

            $tsv_code = filter($this->input->post('tsv_code'));
            $user_id = $this->session->userdata('user_id');
            $csrf_token = $this->session->userdata('csrf_token');

            $this->db->where('user_id', $user_id);
            $this->db->where('csrf_token', $csrf_token);
            $this->db->where('code', $tsv_code);

            if($this->db->get('two_step_login_tokens')->num_rows() == 1){

                $login_data = array(
                    'user_id' => $user_id,
                    'csrf_token' => $csrf_token,
                    'logged_in_time' => date("h:i A")
                );

                if ($this->db->insert('user_logins', $login_data)) {

                    $this->session->unset_userdata('tsv_session');
                    $data = array('status' => 1, 'message' => 'Account Sign In successful');

                }

            }else{
                $data = array('status' => 0, 'message' => 'Invalid verification code');
            }

        }

        session_write_close();
        echo json_encode($data);
        exit();

    }

    function logout()
    {
        if ($this->core_model->check_logged_in()) {
            $this->db->where('user_id', $this->session->userdata('user_id'));
            if ($this->db->delete('user_logins')) {
                $this->session->sess_destroy();
                redirect(site_url() . "enter");
                exit();
            }
        } else {
            redirect(site_url() . "enter");
            exit();
        }
    }
}