<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'admin-kriteria' => array(
        array(
            'field'  => 'namaKriteria',
            'label'  => 'Nama kriteria',
            'rules'  => 'trim|required|alpha_numeric_spaces',
            'errors' => array(
                'required'             => '%s harus di isi.',
                'alpha_numeric_spaces' => '%s tidak boleh menggunakan karakter spesial.'
            ),
        ),
        array(
            'field'  => 'bobotKriteria',
            'label'  => 'Bobot kriteria',
            'rules'  => 'trim|required|numeric|less_than_equal_to[1]|greater_than[0]',
            'errors' => array(
                'required'           => '%s harus di isi.',
                'numeric'            => '%s hanya boleh angka.',
                'less_than_equal_to' => '%s harus kurang dari 1 atau sama dengan 1',
                'greater_than'       => '%s harus lebih dari 0'
            ),
        ),
    ),
);