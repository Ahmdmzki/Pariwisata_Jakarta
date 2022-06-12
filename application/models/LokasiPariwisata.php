<?php

/**
 * Kelas ini untuk data-data yang berhubungan dengan lokasi pariwisata
 * - data ulasan berdasarkan lokasi wisata
 * - data deskripsi / alamat lokasi pariwisata
 * @author Herdy Hardiyant
 */

class LokasiPariwisata extends CI_Model
{

    public function ambilDataLokaisPariwisata(string $slug_nama_lokasi)
    {
        $query = $this->db->query("SELECT * FROM lokasi_pariwisata WHERE slug = '" . $slug_nama_lokasi . "'");

        if (!$query) {
            return null;
        }

        $row = $query->row_array();

        return $row;
    }
}
