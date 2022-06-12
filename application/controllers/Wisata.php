<?php


/**
 * Mengatur halaman wisata yang akan ditampilkan
 *
 * @author Herdy Hardiyant
 */

class Wisata extends CI_Controller
{

    private $data_lokasi_wisata;
    private string $lokasi_slug;
    private KomentarLokasi $komentar_lokasi_model;

    function __construct()
    {
        parent::__construct();
        $this->komentar_lokasi_model = new KomentarLokasi();
    }

    public function home(): void
    {
        $this->load->view('templates/header');
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function view_lokasi(string $nama_lokasi): void
    {
        $this->lokasi_slug = $nama_lokasi;
        $this->fetchDataLokasi();
        $this->komentar_lokasi_model->setCommentRules();
        if ($this->form_validation->run() == false) {
            $this->showLokasiWisataPage();
            return;
        }
        if ($this->session->has_userdata('id')) {
            $this->kirimKomentar();
        }
    }

    public function editKomentar(string $komentar_id,)
    {
        if ($this->session->has_userdata('id') == false) {
            return;
        }
        // retrieve comment by id
        // send comment data to view
        $comment_data =  $this->komentar_lokasi_model->getCommentById($komentar_id);
        $data['comment_data'] = $comment_data;
        $this->komentar_lokasi_model->setCommentRules();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('pages/edit_komentar', $data);
            $this->load->view('templates/footer');
            return;
        }

        $this->komentar_lokasi_model->updateComment($komentar_id, $comment_data['username'], $comment_data['lokasi_id']);
        redirect('../' . $comment_data['lokasi_id']);
    }

    private function kirimKomentar(): void
    {

        $username =  $this->session->userdata('username');
        $this->komentar_lokasi_model->addNewComment($username, $this->lokasi_slug);
        redirect($this->lokasi_slug);
    }


    private function fetchDataLokasi(): void
    {
        $lokasiPariwisata = new LokasiPariwisata();
        $this->data_lokasi_wisata = $lokasiPariwisata->ambilDataLokaisPariwisata($this->lokasi_slug);
    }


    private function showLokasiWisataPage(): void
    {
        $this->load->view('templates/header');

        if (!$this->data_lokasi_wisata) {
            $this->load->view('pages/lokasi_tidak_valid');
        } else {
            $this->load->view('pages/lokasi_wisata', $this->data_lokasi_wisata);
            $this->setupLocationCommentsView();
        }

        $this->load->view('templates/footer');
    }

    private function setupLocationCommentsView(): void
    {
        $data_komentar = $this->komentar_lokasi_model->retrieveAllCommentsByLocation($this->lokasi_slug);
        $data["comments"] = $data_komentar;
        $data['slug'] = $this->lokasi_slug;
        $this->load->view('pages/komentar',  $data);
    }
}
