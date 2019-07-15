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
            ->join('tabel_kriteria',
                'tabel_kriteria.id_kriteria=tabel_bobot_kriteria.id_kriteria')
            ->join('tabel_bobot',
                'tabel_bobot.id_bobot=tabel_bobot_kriteria.id_bobot')
            ->get()
            ->result();
    }

    public function create()
    {
        $namaKriteria = array(
            'nama_kriteria' => $this->input->post('namaKriteria')
        );
        $bobotKriteria = array(
            'nilai_bobot' => $this->input->post('bobotKriteria')
        );

        $this->db->insert('tabel_kriteria', $namaKriteria);
        $idNamaKriteria = $this->db->insert_id();

        $this->db->insert('tabel_bobot', $bobotKriteria);
        $idBobotKriteria = $this->db->insert_id();

        $bobotKriteria = array(
            'id_kriteria' => $idNamaKriteria,
            'id_bobot'    => $idBobotKriteria
        );

        $this->db->insert('tabel_bobot_kriteria', $bobotKriteria);
    }

    public function getKriteria($id_kriteria)
    {
        return $this->db->select(array(
            'tk.id_kriteria',
            'tk.nama_kriteria',
            'tb.nilai_bobot'
        ))
            ->from('tabel_bobot_kriteria as tbk')
            ->join('tabel_kriteria as tk', 'tk.id_kriteria=tbk.id_kriteria')
            ->join('tabel_bobot as tb', 'tb.id_bobot=tbk.id_bobot')
            ->where('tbk.id_kriteria', $id_kriteria)
            ->get()
            ->row();
    }

    public function edit($id_kriteria)
    {
        $bobotKriteria = $this->db->from('tabel_bobot_kriteria')
            ->where('id_kriteria', $id_kriteria)
            ->get()
            ->row();

        $namaKriteriaBaru = $this->input->post('namaKriteria');
        $bobotKriteriaBaru = $this->input->post('bobotKriteria');

        $this->db->where('id_kriteria', $bobotKriteria->id_kriteria)
            ->update('tabel_kriteria',
                array('nama_kriteria' => $namaKriteriaBaru));
        $this->db->where('id_bobot',
            $bobotKriteria->id_bobot)->update('tabel_bobot',
            array('nilai_bobot' => $bobotKriteriaBaru));
    }

    public function delete($id_kriteria)
    {
        $this->db->where('id_kriteria', $id_kriteria)
            ->delete('tabel_kriteria');
    }
}