<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'admin-kriteria'   => array(
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
    'admin-kunir'      => array(
        array(
            'field'  => 'kodeKunir',
            'label'  => 'Kode kunir',
            'rules'  => 'trim|required|alpha_numeric_spaces|is_unique[tabel_kunir.kode_kunir]',
            'errors' => array(
                'required'             => '%s harus di isi.',
                'alpha_numeric_spaces' => '%s tidak boleh menggunakan karakter spesial.',
                'is_unique'            => '%s sudah digunakan.'
            ),
        ),
    ),
    'admin-kunir-edit' => array(
        array(
            'field'  => 'kodeKunir',
            'label'  => 'Kode kunir',
            'rules'  => 'trim|required|alpha_numeric_spaces',
            'errors' => array(
                'required'             => '%s harus di isi.',
                'alpha_numeric_spaces' => '%s tidak boleh menggunakan karakter spesial.',
            ),
        ),
    ),
    'penilaian/edit'   => array(
        array(
            'field'  => 'aromaRimpang',
            'label'  => 'Aroma rimpang',
            'rules'  => 'trim|required|numeric|less_than_equal_to[1]|greater_than[0]',
            'errors' => array(
                'required'           => '%s harus di isi.',
                'numeric'            => '%s hanya boleh angka.',
                'less_than_equal_to' => '%s harus kurang dari 1 atau sama dengan 1',
                'greater_than'       => '%s harus lebih dari 0'
            ),
        ),
        array(
            'field'  => 'kondisiRimpang',
            'label'  => 'Kondisi rimpang',
            'rules'  => 'trim|required|numeric|less_than_equal_to[1]|greater_than[0]',
            'errors' => array(
                'required'           => '%s harus di isi.',
                'numeric'            => '%s hanya boleh angka.',
                'less_than_equal_to' => '%s harus kurang dari 1 atau sama dengan 1',
                'greater_than'       => '%s harus lebih dari 0'
            ),
        ),
        array(
            'field'  => 'warnaRimpang',
            'label'  => 'Warna rimpang',
            'rules'  => 'trim|required|numeric|less_than_equal_to[1]|greater_than[0]',
            'errors' => array(
                'required'           => '%s harus di isi.',
                'numeric'            => '%s hanya boleh angka.',
                'less_than_equal_to' => '%s harus kurang dari 1 atau sama dengan 1',
                'greater_than'       => '%s harus lebih dari 0'
            ),
        ),
        array(
            'field'  => 'seranggaHidup',
            'label'  => 'Serangga hidup',
            'rules'  => 'trim|required|numeric|less_than_equal_to[1]|greater_than[0]',
            'errors' => array(
                'required'           => '%s harus di isi.',
                'numeric'            => '%s hanya boleh angka.',
                'less_than_equal_to' => '%s harus kurang dari 1 atau sama dengan 1',
                'greater_than'       => '%s harus lebih dari 0'
            ),
        ),
        array(
            'field'  => 'ukuran',
            'label'  => 'Ukuran',
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