<?php

class KomentarLokasi extends CI_Model
{
    public $komentar_input_name = "komentar";
    private $table_komentar = "komentar_lokasi";

    // Create new comment
    public function addNewComment(string $user_id, string $lokasi_slug)
    {
        $komentar = $this->input->post($this->komentar_input_name);
        $date = date('Y-m-d H:i:s');
        $data = [
            'id' => $user_id . $date,
            'user_id' =>  $user_id,
            'lokasi_id' => $lokasi_slug,
            'komentar' => $komentar
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
        return $comments_query->row_array();
    }

    // See all comment based of the location page

    // Update comment
    // Can only edit owned comment
    // Create a check with $user_id from $table_komentar and $id from $users_table. Both of these must equall to confirm edited comment and push it to the db
}
