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
        
        <h3>Création d'une nouvelle campagne</h3>
        <div>

        </div>

        <?php
            include "../includes/footer.php";
        ?>
    </body>
</html>