<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $login = $this->session->userdata('login');
        if (!$login) {
            redirect('admin/auth');
        }

        $this->load->model('admin/MDashboard', 'model_admin_dashboard');
    }

    public function index()
    {
        $this->template->load('admin/dashboard');
    }

}