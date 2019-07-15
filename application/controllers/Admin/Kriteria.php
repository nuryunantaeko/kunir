<?php 

class Kriteria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $login = $this->session->userdata('login');
        if (!$login) {
            redirect('admin/auth');
        }

        $this->load->model('admin/MKriteria', 'model_admin_kriteria');
    }

    public function index()
    {
        $data['kriteria'] = $this->model_admin_kriteria->getAllKriteria();
        $this->template->load('admin/kriteria', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            # code...
        }else{
            $this->template->load('admin/kriteria/create');
        }
    }

    public function edit($id_kriteria)
    {
        if ($this->input->post()) {
            # code...
        }else{
            $this->template->load('admin/kriteria/edit');
        }
    }

    public function delete($id_kriteria)
    {
        $this->model_admin_kriteria->delete($id_kriteria);
        redirect('admin/kriteria');
    }
}