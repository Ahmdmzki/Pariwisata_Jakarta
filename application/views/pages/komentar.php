<style>
    textarea {
        background-color: transparent;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: solid;
        width: auto;
        margin-right: 1rem;
    }

    .comment-form {
        margin-bottom: 1rem;
    }
</style>


<section id="todo" class="parallax" style="color: white; padding: 1rem;">

    <div class="comment-form">

        <?php
        $komentar_model = new KomentarLokasi();
        $nama_input_komentar
            = $komentar_model->komentar_input_name;
        if ($this->session->has_userdata('id')) { ?>

            <!--Komentar Input HTML -->
            <form method="post" action=<?= $slug; ?>>
                <textarea name=<?= $nama_input_komentar; ?> rows="4" cols="50" placeholder="Tulis komentar anda di sini!"></textarea>
                <?= form_error(
                    $nama_input_komentar
                ); ?>
                <button type="submit" class="btn btn-capsul btn-transparent-prime">Tambah Komentar</button>
            </form>
            <!--Komentar Input HTML -->

        <?php } else { ?>

            <p style="font-weight:bold ;">Anda harus login atau register terlebih dahulu untuk memberi komentar!</p>

        <?php } ?>


    </div>

    <h3>Komentar</h3>
    <?php
    $username = $this->session->userdata('username');
    foreach ($comments as $comment) {
        echo "<h4>" . $comment["username"] . "</h4>";

        if ($comment["username"] == $username) {
            echo "<a>" . "Edit" . "</a>";
        }
        echo "<p style='color:gray ;'>" . $comment["date"] . "</p>";
        echo "<p>" . $comment["komentar"] . "</p>";
        echo "<br/>";
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
    ?>

</section>