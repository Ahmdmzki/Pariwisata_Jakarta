<?php


/**
 * Mengatur halaman wisata yang akan ditampilkan
 *
 * @author Herdy Hardiyant
 */

class Wisata extends CI_Controller
{

    private $data;

    public function home()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function view_lokasi(string $nama_lokasi)
    {
        $this->fetchDataLokasi($nama_lokasi);
        $this->komentarLokasi($nama_lokasi);
        $this->showLokasiWisataPage();
    }

    private function komentarLokasi(string $nama_lokasi)
    {
        $komentar_model = new KomentarLokasi();
        $komentar_model->setCommentRules();
        $nama_input = $komentar_model->komentar_input_name;
        if ($this->form_validation->run()) {
            // Send data to db
            $comment = $this->input->post($nama_input);
            echo '<script>alert("' . $comment . '")</script>';
        }
    }


    private function fetchDataLokasi(string $nama_lokasi)
    {
        $lokasiPariwisata = new LokasiPariwisata();
        $this->data = $lokasiPariwisata->ambilDataLokaisPariwisata($nama_lokasi);
    }


    private function showLokasiWisataPage()
    {
        $this->load->view('templates/header');

        if (!$this->data) {
            $this->load->view('pages/lokasi_tidak_valid');
        } else {
            $this->load->view('pages/lokasi_wisata', $this->data);
            $this->load->view('pages/komentar',  $this->data);
        }

        $this->load->view('templates/footer');
    }
}
