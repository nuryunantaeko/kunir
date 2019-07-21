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
        redirect('/');
    }

    public function users()
    {
        $data['users'] = $this->model_auth->getAllUsers();
        $this->template->load('admin/auth/index', $data);
    }

    public function create_user()
    {
        if ($this->input->post()) {
            if ($this->form_validation->run('admin-tambah-baru') === true) {
                $this->model_auth->create();
                redirect('admin/auth/users');
            }
        }

        $this->template->load('admin/auth/create');
    }
    public function edit_user($id_user)
    {
        if ($this->input->post()) {
            if ($this->form_validation->run('admin-edit-user') === true) {
                $this->model_auth->edit($id_user);
                redirect('admin/auth/users');
            }
        }
        
        $data['user'] = $this->model_auth->getUser($id_user);
        $this->template->load('admin/auth/edit', $data);
    }

    public function delete_user($id_user)
    {
        $this->model_auth->delete($id_user);
        redirect('admin/auth/users');
    }
}