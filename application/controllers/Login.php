<?php

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('session');
    }

    function index()
    { 
        $data['judul'] = "Login";
        $this->load->view('Templates/Header', $data);
        $this->load->view('Login/index');
        $this->load->view('Templates/Footer');
    }

    function process_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->Login_model->getAkun($username)[0];

        if (!$user) {
            $this->session->set_flashdata('message_wrong', 'username not found');
           redirect(base_url('/Login'));
        } else {
            if (password_verify($password, $user->Password)) {
                $_SESSION['username'] = $username;
                redirect(base_url());
            } else {
               $this->session->set_flashdata('message_wrong', 'password salah !');
               redirect(base_url('/Login'));
            }
        }
    }

    function logout() {
        session_destroy();
        redirect(base_url('/Login'));
    }


}