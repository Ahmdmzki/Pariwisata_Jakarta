<?php
class Wisata extends CI_Controller
{

    public function home($title = 'home')
    {
        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }



    public function view_lokasi($nama_lokasi = 'home')
    {
        $data['title'] = ucfirst($nama_lokasi);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/lokasi_wisata', $data);
        $this->load->view('templates/footer', $data);
    }
}
