<script src="assets/jquery/jquery.min.js"></script>
<link rel="stylesheet" href="assets/styles/bootstrap/bootstrap.min.css">
<script src="assets/styles/bootstrap/bootstrap.bundle.min.js"></script>
<link href="assets/styles/edg-custom.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="assets/styles/font-awesome/font-awesome.css">

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <title><?php echo $GLOBALS["Business_Name"]; ?></title>
    <link rel="icon" type="image/x-icon" href="assets/src/img/edg.ico">
</head>

<div class="pagewrap">
    <body class="viewport banner-home">
        <header class="main-header" style="padding-top: 40px;">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-none">
                    <a class="navbar-brand" href="">
                        <div class="row">
                            <div class="col-12 col-sm-3">
                                <img src="assets/src/img/logo.png" class="brand-image" alt="<?php echo strtoupper($GLOBALS["Business_Name"]); ?>">
                            </div>
                            <div class="col-12 col-sm-4">
                                <span class="brand-text font-weight-light "><?php echo strtoupper($GLOBALS["Business_Name"]); ?></span>
                            </div>
                        </div>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>



                    <div class="collapse navbar-collapse menu-links" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item menu-active">
                                <a class="nav-link header-options" href="javascript:void(0)" id="home-header">
                                    <span class="header-options-color">INICIO</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link header-options" href="javascript:void(0)" id="about-header">
                                    <span class="header-options-color">SOBRE</span>
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link header-options" href="javascript:void(0)" id="services-header">
                                    <span class="header-options-color">SERVICIOS</span>
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link header-options" href="javascript:void(0)" id="contact-header">
                                    <span class="header-options-color">CONTACTO</span>
                                </a>

                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="container" style="padding-top: 25px; padding-bottom: 25px; flex-grow: 1;" id="main-container">