<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <title>Make Me Up</title>


    <!-- Add the new slick-theme.css if you want the default styling -->
    <link href="assets/slick/slick/slick.css" rel="stylesheet" type="text/css">
    <!-- Icons for this template -->
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Stylesheet -->
    <link href="assets/css/app.css" rel="stylesheet" type="text/css">

</head>
<body>
<?php
include 'bouton.html';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-lg-3 col-xl-2 sidebar">
            <?php
            include 'sidebar.html';
            ?>

            <div class="sidebar-toggle">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </div>
        <div class="col-md-12 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 p-0">

            <?php
            include 'logoTop.html';
            ?>
            <div class="container-fluid p-0 color-back">
                <h1>CRÉATION D'UN ARTICLE</h1>
            </div>
            <div class="container">
                <?php
                include 'formulaireArticle.html';
                ?>
            </div>
        </div>
    </div>
</div>
</body>
