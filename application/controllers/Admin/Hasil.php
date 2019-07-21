<?php
/**
 * Class Hasil
 *
 * @package
 */

class Hasil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       

        $this->load->model('admin/MHasil', 'model_hasil');
    }

    public function index()
    {
        $data['bobotKriteria'] = $this->model_hasil->getAllBobotKritera();
        $data['matriksAlternatifKriteria']
            = $this->model_hasil->getAllMatriksAlternatif();
        $data['nilaiMaks'] = $this->model_hasil->getMaksMinKriteria();
        $data['normalisasi'] = $this->model_hasil->getAllMatriksNormalisasi();
        $data['terbobot'] = $this->model_hasil->getAllMatriksTerbobot();
        $data['perangkingan'] = $this->model_hasil->getPerangkingan();
        $this->template->load('admin/hasil/index', $data);
    }
}