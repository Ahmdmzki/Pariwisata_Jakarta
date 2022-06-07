<?php


/**
 * Mengatur halaman yang akan ditampilkan
 *
 * @author Herdy Hardiyant
 */

class Wisata extends CI_Controller
{

    public function home($title = 'home')
    {
        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function view_lokasi($nama_lokasi)
    {

        $lokasiPariwisata = new LokasiPariwisata();
        $data = $lokasiPariwisata->ambilDataLokaisPariwisata($nama_lokasi);

        if (!$data) {
            echo "<h1>Lokasi tidak tersedia</h1>";
            return;
        }

        $this->load->view('templates/header', $data);
        $this->load->view('pages/lokasi_wisata', $data);
        $this->load->view('templates/footer', $data);
    }
}
