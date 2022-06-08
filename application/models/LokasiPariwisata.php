<?php

/**
 * Kelas ini untuk data-data yang berhubungan dengan lokasi pariwisata
 * - data ulasan berdasarkan lokasi wisata
 * - data deskripsi / alamat lokasi pariwisata
 * @author Herdy Hardiyant
 */

class LokasiPariwisata extends CI_Model
{
    public function ambilSemuaLokasiPariwisata()
    {
    }


    /**
     * mengambil data lokasi wisata yang ada di database berdasarkan nama lokasi yang diubah menjadi slug
     *
     * @param string  $slug_nama_lokasi  
     * @author Herdy Hardiyant
     * @return Array
     */
    public function ambilDataLokaisPariwisata(string $slug_nama_lokasi)
    {
        $query = $this->db->query("SELECT * FROM lokasi_pariwisata WHERE slug = '" . $slug_nama_lokasi . "'");

        if (!$query) {
            return null;
        }

        $row = $query->row_array();

        return $row;
    }

    public function kirim_ulasan(string $nama_lokasi, string $ulasan)
    {
    }
}
