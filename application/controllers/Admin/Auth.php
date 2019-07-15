<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Mauth', 'model_auth');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function login()
    {
        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $login = $this->model_auth->login($username, $password);

            if ($login) {
                redirect('admin/dashboard');
            }
        }
    }

    public function logout()
    {
        $this->model_auth->logout();
    }
}