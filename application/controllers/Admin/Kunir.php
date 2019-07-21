<?php
/**
 * Class Kunir
 *
 * @package
 */

class Kunir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('admin/MKunir', 'model_kunir');
    }

    public function index()
    {
        $data['kunir'] = $this->model_kunir->getAllKunir();
        $this->template->load('admin/kunir/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            if ($this->form_validation->run('admin-kunir') === true) {
                $this->model_kunir->create();
                redirect('admin/kunir');
            }
        }

        $this->template->load('admin/kunir/create');
    }

    public function edit($id_kunir)
    {
        if ($this->input->post()) {
            if ($this->form_validation->run('admin-kunir-edit') === true) {
                $this->model_kunir->edit($id_kunir);
                redirect('admin/kunir');
            }
        }
        $data['kunir'] = $this->model_kunir->getKunir($id_kunir);
        $this->template->load('admin/kunir/edit', $data);
    }

    public function delete($id_kunir)
    {
        $this->model_kunir->delete($id_kunir);
        redirect('admin/kunir');
    }
}