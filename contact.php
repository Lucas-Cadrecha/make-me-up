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
        <div class="col-md-3 sidebar">
            <?php
            include 'sidebar.html';
            ?>
        </div>
        <div class="col-md-9 p-0 offset-md-3">
            <?php
            include 'logoTop.html';
            ?>
            <div class="container-fluid p-0 color-back">
                <h1>INSCRIPTION / CONNEXION</h1>
            </div>
            <div class="container">
                <?php
                include 'formulaireContact.html';
                ?>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/vendor/jquery.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<!-- build:js -->
<script src="assets/js/app.js"></script>
</body>
</html>