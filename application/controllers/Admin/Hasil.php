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
    }

    public function index()
    {
        $this->template->load('admin/hasil/index');
    }
}