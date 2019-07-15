<?php
/**
 * Class MKunir
 *
 * @package
 */

class MKunir extends CI_Model
{
    public function getAllKunir()
    {
        return $this->db->from('tabel_kunir')
            ->get()
            ->result();
    }

    public function create()
    {
        $kodeKunir = $this->input->post('kodeKunir');

        $this->db->insert('tabel_kunir',
            array('kode_kunir' => strtoupper($kodeKunir)));
    }

    public function getKunir($id_kunir)
    {
        return $this->db->get_where('tabel_kunir',
            array('id_kunir' => $id_kunir))->row();
    }

    public function edit($id_kunir)
    {
        $kodeKunir = $this->input->post('kodeKunir');
        $this->db->where('id_kunir', $id_kunir)
            ->update('tabel_kunir', array('kode_kunir' => $kodeKunir));
    }

    public function delete($id_kunir)
    {
        $this->db->where('id_kunir', $id_kunir)
            ->delete('tabel_kunir');
    }
}