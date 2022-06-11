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
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 1rem;
    }

    div {
        border-radius: 1rem;
    }

    label {
        color: #e1eec3;
    }

    button {
        border-radius: 8px;
        border-color: gray;
        padding: 8px;
        color: black;

    }

    a,
    b {
        color: black;

    }
</style>

<body bgcolor="white">
    <div align="center">
        <section id="todo" class="parallax">
            <div style="box-shadow: -10px -10px 10px 21px rgba(0,0,0,0.35); background-color: radial-gradient(#f05053 50%, #e1eec3); color: white; padding-top: 1rem; padding-bottom: 4rem ; width: 30% ;height: 30% ;">
                <form action="login" method="POST">
                    <h3 style="font-family:times new roman; color: white;">LOGIN</h3>
                    <Label>Username</Label>
                    <br>
                    <input name="username" style="color: black;" type="text" placeholder="Username">
                    <?= form_error('username'); ?>
                    <br>
                    <br>
                    <label>Password </label>
                    <br>
                    <input name="password" style="color: black;" type="password" placeholder="Password">
                    <?= form_error('password'); ?>
                    <br>
                    <br>
                    <button type="submit" style="font-family: 'Times New Roman', Times, serif; color: #6495ED;"><b>SUBMIT</b></button>
                    <?php
                    $message = $this->session->flashdata('message');
                    if (isset($message)) {
                        echo $message;
                    }
                    ?>
                </form>


            </div>
        </section>