<section id="todo" class="parallax">
    <div style="color: white; padding: 1rem;">
        <form action="register" method="post">
            <h3>Register</h3>
            <Label>Username</Label>
            <input name="username" style="color: black;" type="text">
            <?= form_error('username'); ?>
            <br>
            <label>Password</label>
            <input name="password" style="color: black;" type="password">
            <?= form_error('password'); ?>
            <br>
            <label>Repeat Password</label>
            <input name="repeat_password" style="color: black;" type="password">
            <?= form_error('repeat_password'); ?>
            <br>
            <button type="submit" style="color: black;">Submit</button>
        </form>
    </div>

</section>