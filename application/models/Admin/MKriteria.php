<?php

class MKriteria extends CI_Model
{
    public function getAllKriteria()
    {
        return $this->db->select(array(
            'tabel_kriteria.id_kriteria',
            'tabel_kriteria.nama_kriteria',
            'tabel_bobot.nilai_bobot'
        ))
        ->from('tabel_bobot_kriteria')
        ->join('tabel_kriteria', 'tabel_kriteria.id_kriteria=tabel_bobot_kriteria.id_kriteria')
        ->join('tabel_bobot', 'tabel_bobot.id_bobot=tabel_bobot_kriteria.id_bobot')
        ->get()
        ->result();
    }

    public function delete($id_kriteria)
    {
        $this->db->where('id_kriteria', $id_kriteria)
        ->delete('tabel_kriteria');
    }
}