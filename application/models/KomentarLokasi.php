<?php

class KomentarLokasi extends CI_Model
{
    public $komentar_input_name = "komentar";
    private $table_komentar = "komentar_lokasi";

    // Create new comment
    public function addNewComment(string $user_id, string $lokasi_slug, string $komentar)
    {
        $data = [
            'id' => $user_id . $lokasi_slug,
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

    // See all comment based of the location page

    // Update comment
    // Can only edit owned comment
    // Create a check with $user_id from $table_komentar and $id from $users_table. Both of these must equall to confirm edited comment and push it to the db
}
