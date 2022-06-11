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
        <?php if ($this->session->has_userdata('id')) { ?>
            <textarea id="w3review" name="w3review" rows="4" cols="50" placeholder="Tulis komentar anda di sini!"></textarea>
            <button class="btn btn-capsul btn-transparent-prime">Tambah Komentar</button>
        <?php } else { ?>
            <p>Anda harus login atau register terlebih dahulu untuk memberi komentar!</p>
        <?php } ?>
    </div>
    <h3>Komentar</h3>
    <h4>Your Username</h4>
    <a href="">Edit</a>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
        optio, eaque rerum! Provident similique accusantium nemo autem.</p>
    <br>
    <h4>Username</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
        optio, eaque rerum! Provident similique accusantium nemo autem.</p>
</section>