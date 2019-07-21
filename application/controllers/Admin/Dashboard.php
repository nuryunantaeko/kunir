<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
      

        $this->load->model('admin/MDashboard', 'model_admin_dashboard');
    }

    public function index()
    {
        $login = $this->session->userdata('login');
        if (!$login) {
            $this->template->load('admin/dashboard');
        }else {
            $this->template->load('welcome_message');
        }
        
    }

}