<?php
/**
 * Class MHasil
 *
 * @package
 */

class MHasil extends CI_Model
{
    public function getPerangkingan()
    {
        $rangking = array();
        foreach ($this->getAllMatriksTerbobot() as $key => $terbobot) {
            $rangking[$key] = array_sum($terbobot);
        }
        arsort($rangking);

        return (object)$rangking;
    }

    public function getAllMatriksTerbobot()
    {
        // Nilai Normalisasi * bobot
        $bobot = array();
        foreach ($this->getAllBobotKritera() as $key => $bobotKriteria) {
            $kode = "c";
            $kode .= $key + 1;
            $bobot[$kode] = $bobotKriteria->nilai_bobot;
        };

        $matriksTerbobot = array();
        $terbobot = array();
        foreach (
            $this->getAllMatriksNormalisasi() as $kode => $matriksNormalisasi
        ) {
            foreach ($matriksNormalisasi as $key => $normal) {
               $terbobot[$key] = round($normal * $bobot[$key], 5);
                $matriksTerbobot[$kode] = $terbobot; 
            }
        }
        return (object)$matriksTerbobot;
    }

    public function getAllBobotKritera()
    {
        return $this->db->select(array(
            'tb.nilai_bobot',
            'tk.nama_kriteria'
        ))
            ->from('tabel_bobot_kriteria as tbk')
            ->join('tabel_bobot as tb', 'tb.id_bobot=tbk.id_bobot')
            ->join('tabel_kriteria as tk', 'tk.id_kriteria=tbk.id_kriteria')
            ->get()
            ->result();
    }

    public function getAllMatriksNormalisasi()
    {
        // Nilai kriteria / nilai maksimal kriteria
        $bobot = array();
        $kriteria = array();
        foreach ($this->getAllMatriksAlternatif()->alternatif as $alternatif) {
            $bobot['c1'] = round($alternatif->c1
                / $this->getMaksMinKriteria()->c1, 5);
            $bobot['c2'] = round($alternatif->c2
                / $this->getMaksMinKriteria()->c2, 5);
            $bobot['c3'] = round($alternatif->c3
                / $this->getMaksMinKriteria()->c3, 5);
            $bobot['c4'] = round($alternatif->c4
                / $this->getMaksMinKriteria()->c4, 5);
            $bobot['c5'] = round($alternatif->c5
                / $this->getMaksMinKriteria()->c5, 5);
            $kriteria[$this->getKodeKunir($alternatif->id_kunir)] = $bobot;
        }

        return (object)$kriteria;
    }

    public function getAllMatriksAlternatif()
    {
        $alternatif = $this->db->select()
            ->from('tabel_nilai as tn')
            ->join('tabel_kunir as tk', 'tk.id_kunir=tn.id_kunir')
            ->get();

        $kriteria = $this->db->from('tabel_kriteria')
            ->get()
            ->result();

        $data = array(
            'alternatif' => $alternatif->result(),
            'kriteria'   => $kriteria
        );

        return (object)$data;
    }

    public function getMaksMinKriteria()
    {
        $c1 = array();
        $c2 = array();
        $c3 = array();
        $c4 = array();
        $c5 = array();

        foreach ($this->getAllMatriksAlternatif()->alternatif as $alternatif) {
            $c1[] = $alternatif->c1;
            $c2[] = $alternatif->c2;
            $c3[] = $alternatif->c3;
            $c4[] = $alternatif->c4;
            $c5[] = $alternatif->c5;
        }

        $data = array(
            'c1' => max($c1),
            'c2' => max($c2),
            'c3' => max($c3),
            'c4' => max($c4),
            'c5' => max($c5),
        );

        return (object)$data;
    }

    private function getKodeKunir($id_kunir)
    {
        return $this->db->get_where('tabel_kunir',
            array('id_kunir' => $id_kunir))
            ->row()
            ->kode_kunir;
    }
}