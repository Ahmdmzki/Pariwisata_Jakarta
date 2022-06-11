<style type="text/css">
    table {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 11px;
        background-color: "white";
    }

    input {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size: 15px;
        height: 30px;
        border-radius: 1rem;
        padding: 1rem;

    }

    div {
        border-radius: 1rem;
    }

    label {
        color: #e1eec3;
    }

    button {
        border-radius: 1rem;
        padding: 3%;
    }
</style>

<body bgcolor="white"><br />
    <div align="center">
        <section id="todo" class="parallax">
            <div style="box-shadow: -10px -10px 10px 21px rgba(0,0,0,0.35); background-color: radial-gradient(#f05053 50%, #e1eec3); color: black; padding: 6rem; width: 30% ;height: 30% ;">
                <form action="register" method="post">
                    <h3 style="color: white">REGISTER</h3>
                    <Label>Username</Label>
                    <br>
                    <input name="username" style="color: black;" type="text" placeholder="Username">
                    <?= form_error('username'); ?>
                    <br>
                    <label>Password</label>
                    <br>
                    <input name="password" style="color: black;" type="password" placeholder="Password">
                    <?= form_error('password'); ?>
                    <br>
                    <label>Repeat Password</label>
                    <br>
                    <input name="repeat_password" style="color: black;" type="password" placeholder="Repeat Password">
                    <?= form_error('repeat_password'); ?>
                    <br>
                    <br>
                    <button type="submit" style="font-family: 'Times New Roman', Times, serif; color: #6495ED;"><b>SUBMIT</b></button>
                    <button type="submit" style="font-family: 'Times New Roman', Times, serif; color: #6495ED;"><b><a href="login">LOGIN</a></b></button>
                </form>
            </div>

        </section>