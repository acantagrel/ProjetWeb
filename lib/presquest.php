<?php session_start(); ?>
<html>
    <!-- Page d'accueil -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Attention au chemin ! -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/iraeer.css" rel="stylesheet">
        <title>IRAEER</title>

    </head>
    <body>
        <?php 
            include "../includes/navBar.php";
            include "../includes/connect.php";
        ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
                    <a href="https://uxmind.eu/2014/06/23/attrakdiff-evaluation-quantitative-ux/">Pour en savoir plus</a>
                </div>
            </div>
        </div>


        <!-- plugins bootstrap -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../jquery/jquery.min.js"></script>

        <?php
            include "../includes/footer.php";
        ?>
    </body>
</html>