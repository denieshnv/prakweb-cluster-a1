<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


    public function index(){
       $this->load->view('auth/login');
    }

    public function cekLogin()
    {
        $username = $this->input->post('user_name');
        $password = $this->input->post('password');

        $getUser = $this->model_model->getUsername($username);

        if ($getUser) {
            $data = [
                'username' => $username,
                'loggedin_time' => time()
            ];
            $this->session->set_userdata($data);
            redirect('user');
        } else {
            $this->session->set_flashdata('message', '<p> User tidak terdaftar </p>');
            redirect('login');
        }
    }
}
