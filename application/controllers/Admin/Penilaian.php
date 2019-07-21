<?php
/**
 * Class Penilaian
 *
 * @package
 */

class Penilaian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
     

        $this->load->model('admin/MPenilaian', 'model_penilaian');
    }

    public function index()
    {
        $data['penilaian'] = $this->model_penilaian->getAllPenilaian();
        $this->template->load('admin/penilaian/index', $data);
    }

    public function edit($id_kunir)
    {
        if ($this->input->post()) {
            if ($this->form_validation->run() === true) {
                $this->model_penilaian->setPenilaian($id_kunir);
                redirect('admin/penilaian');
            }
        }

        $data['penilaian'] = $this->model_penilaian->getPenilaian($id_kunir);
        $this->template->load('admin/penilaian/edit', $data);
    }

}