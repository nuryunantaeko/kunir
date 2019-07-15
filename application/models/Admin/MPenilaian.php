<?php
/**
 * Class MPenilaian
 *
 * @package
 */

class MPenilaian extends CI_Model
{
    public function getAllPenilaian()
    {
        return $this->db->select(array(
            'tabel_nilai.c1',
            'tabel_nilai.c2',
            'tabel_nilai.c3',
            'tabel_nilai.c4',
            'tabel_nilai.c5',
            'tabel_kunir.id_kunir',
            'tabel_kunir.kode_kunir'
        ))
            ->from('tabel_kunir')
            ->join('tabel_nilai', 'tabel_kunir.id_kunir=tabel_nilai.id_kunir',
                'left')
            ->get()
            ->result();
    }

    public function getPenilaian($id_kunir)
    {
        $nilai = $this->db->get_where('tabel_nilai',
            array('id_kunir' => $id_kunir))->num_rows();

        if ($nilai === 0) {
            $this->create($id_kunir);
        }

        return $this->db->from('tabel_nilai')
            ->join('tabel_kunir', 'tabel_kunir.id_kunir=tabel_nilai.id_kunir')
            ->where('tabel_nilai.id_kunir', $id_kunir)
            ->get()
            ->row();
    }

    public function create($id_kunir)
    {
        $this->db->insert('tabel_nilai', array('id_kunir' => $id_kunir));
    }

    public function setPenilaian($id_kunir)
    {
        $nilai = array(
            'c1' => $this->input->post('aromaRimpang'),
            'c2' => $this->input->post('kondisiRimpang'),
            'c3' => $this->input->post('warnaRimpang'),
            'c4' => $this->input->post('seranggaHidup'),
            'c5' => $this->input->post('ukuran'),
        );

        $this->db->where('id_kunir', $id_kunir)
            ->update('tabel_nilai', $nilai);
    }
}