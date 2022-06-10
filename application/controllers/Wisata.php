<?php


/**
 * Mengatur halaman wisata yang akan ditampilkan
 *
 * @author Herdy Hardiyant
 */

class Wisata extends CI_Controller
{

    public function home()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function view_lokasi(string $nama_lokasi)
    {
        $this->fetchDataLokasi($nama_lokasi);
        $this->showLokasiWisataPage();
    }

    private $data;

    private function fetchDataLokasi(string $nama_lokasi)
    {
        $lokasiPariwisata = new LokasiPariwisata();
        $this->data = $lokasiPariwisata->ambilDataLokaisPariwisata($nama_lokasi);
    }

    private function showLokasiWisataPage(){
        $this->load->view('templates/header');

        if (!$this->data) {
            $this->load->view('pages/lokasi_tidak_valid');
        } else {
            $this->load->view('pages/lokasi_wisata', $this->data);
        }

        $this->load->view('templates/footer');
    }

}
