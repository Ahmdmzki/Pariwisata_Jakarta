<!DOCTYPE html>
<html lang="en">

<head>

    <title>Wisata Jakarta</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- stylesheets css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" type="assets/text/css" href="assets/css/loaders.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/nivo-lightbox.css">
    <link rel="stylesheet" href="assets/css/nivo_themes/default/default.css">
    <link rel="stylesheet" href="assets/css/hover-min.css">
    <link rel="stylesheet" href="assets/css/contact-input-style.css">
</head>

<div class="loader loader-bg">
    <div class="loader-inner ball-pulse-rise">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>



<!------------Static navbar ------------>
<nav class="navbar navbar-default top-bar affix" data-spy="affix" data-offset-top="250">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=".">The Jakarta Tour</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right navbar-link">
                <li><a href=".">Home</a></li>
                <?php
                $name = $this->session->userdata('username');
                if ($this->session->has_userdata('id')) {
                    echo " <li><a href='logout'>Logout</a></li>";
                    echo " <li><a  style='font-weight:bold ;' href=''>" . $name . "</a></li>";
                } else {
                    echo ' <li><a href="login">Login</a></li>';
                    echo '<li><a href="register">Register</a></li>';
                }
                ?>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>