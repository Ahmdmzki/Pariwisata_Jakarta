<section id="todo" class="parallax">
    <div style="color: white; padding: 1rem; height: 100%;">
        <form action="login" method="POST">
            <h3>Login</h3>
            <Label>Username</Label>
            <input name="username" style="color: black;" type="text">
            <?= form_error('username'); ?>
            <br>
            <label>Password</label>
            <input name="password" style="color: black;" type="password">
            <?= form_error('password'); ?>
            <br>
            <button type="submit" style="color: black;">Submit</button>
            <?php
            $message = $this->session->flashdata('message');
            if (isset($message)) {
                echo $message;
            }
            // echo "<p style='color: red;'> " . $message . " </p>";
            ?>
        </form>


    </div>
</section>