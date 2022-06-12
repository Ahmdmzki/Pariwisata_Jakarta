<?php

class KomentarLokasi extends CI_Model
{
    public $komentar_input_name = "komentar";
    private $table_komentar = "komentar_lokasi";

    // Create new comment
    public function addNewComment(string $username, string $lokasi_slug)
    {
        $komentar = $this->input->post($this->komentar_input_name);
        $date = date('Y-m-d H:i:s');
        $number = rand();
        $data = [
            'id' => $username . $number,
            'username' =>  $username,
            'lokasi_id' => $lokasi_slug,
            'komentar' => $komentar,
            'date' => $date
        ];

        $this->db->insert($this->table_komentar,  $data);
    }

    public function setCommentRules()
    {
        $this->form_validation->set_rules($this->komentar_input_name, 'Komentar', 'required|trim');
    }

    public function retrieveAllCommentsByLocation($lokasi_slug)
    {
        $lokasi_id = ['lokasi_id' => $lokasi_slug];
        $comments_query = $this->db->get_where($this->table_komentar, $lokasi_id);
        if (!$comments_query) {
            return [];
        }
        $comments = array_reverse($comments_query->result_array());
        return $comments;
    }

    public function getCommentById(string $id)
    {
        $id_condition = ['id' => $id];
        $comment = $this->db->get_where($this->table_komentar, $id_condition, 1);
        return  $comment->row_array();
    }

    public function updateComment(string $comment_id, string $username, string $lokasi_slug)
    {
        $komentar = $this->input->post($this->komentar_input_name);
        $date = date('Y-m-d H:i:s');
        $data = [
            'id' => $comment_id,
            'username' =>  $username,
            'lokasi_id' => $lokasi_slug,
            'komentar' => $komentar,
            'date' => $date
        ];

        $this->db->replace($this->table_komentar, $data);
    }

    public function deleteComment(string $comment_id)
    {

        $this->db->delete($this->table_komentar, array('id' => $comment_id));
    }

    //TODO Update / delete comments
    // show the edit if the comment is from the authd user
    // open edit komentar page view 
    // show textarea with the value of the comment here
    // change it 
    // or press the delete button to delete it
    // confirm
    // check again to see if the $user_id is equal to the $user_id from the $tabel_komentar
    // if the check is true, update the database
}
