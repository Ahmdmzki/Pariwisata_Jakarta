<style>
    textarea {
        background-color: transparent;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: solid;
        width: auto;
        margin-right: 1rem;
        margin-bottom: 1rem;
    }

    p {
        color: black;
    }

    .comment-form {
        margin-bottom: 1rem;
    }
</style>

<body>
    <div align="center">

        <section id="todo" class="parallax" style="height: 100vh; box-sizing:border-box ;">

            <?php
            $komentar_model = new KomentarLokasi();
            $nama_input_komentar
                = $komentar_model->komentar_input_name;
            ?>

            <!--Komentar Input HTML -->
            <form method="post" action=<?= $comment_data['id'] ?>>
                <textarea name=<?= $nama_input_komentar; ?> rows="4" cols="50" placeholder="Tulis komentar anda di sini!"><?= $comment_data['komentar']; ?></textarea>
                <?= form_error(
                    $nama_input_komentar
                ); ?>
                <br>
                <button type="submit" class="btn btn-capsul btn-transparent-prime">Ubah Komentar</button>
                <button type="submit" class="btn btn-capsul btn-transparent-prime">Hapus</button>
            </form>
            <!--Komentar Input HTML -->


        </section>